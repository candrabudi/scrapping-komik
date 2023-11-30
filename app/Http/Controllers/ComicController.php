<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Symfony\Component\DomCrawler\Crawler;
use Illuminate\Support\Facades\File;
use App\Models\Genre;
use App\Models\Comic;
use App\Models\ComicGenre;
use App\Models\ComicChapter;
use App\Models\ComicChapterLink;
use DB;
use DateTime; 
use GuzzleHttp\Client;
class ComicController extends Controller
{
    public function index()
    {
        return view('comic.index');
    }

    public function comicProcess(Request $request)
    {
        DB::beginTransaction();
        try{

            $url = $request->url;
            if(!$url){
                return response()
                    ->json([
                        'status' => 'failed', 
                        'code' => 422, 
                        'message' => 'Please input url'
                    ], 422);
            }

            $comic = $this->crawlComic($url);
            $comicChapter = $this->crawlComicChapter($url);

            $comicTitle = trim(str_replace('/n', ' ', $comic['data']['title']));
            $checkComic = Comic::where('title', $comicTitle)
                ->select('id')
                ->first();

            if($checkComic){
                return response()
                    ->json([
                        'status' => 'failed', 
                        'code' => 400, 
                        'message' => 'Duplicate data comic.'
                    ]);
            }    

            $storeComic = new Comic();
            $storeComic->title = str_replace(["Komik", "\n"], "", $comicTitle);
            $storeComic->alternative = $comic['data']['judul_alternatif'];
            $storeComic->status = $comic['data']['status'] == 'Tamat' ? 'completed' : 'ongoing';
            $storeComic->author = $comic['data']['pengarang'];
            $storeComic->artist = $comic['data']['ilustrator'];
            $storeComic->type = $comic['data']['jenis_komik'];
            $storeComic->rating = $comic['data']['rating'];
            $storeComic->description = $comic['data']['description'];
            $storeComic->thumb = $comic['data']['images'][0];
            $storeComic->save();
            $storeComic->fresh();

            $genres = explode(", ", $comic['data']['genre']);
            foreach($genres as $genre){
                $checkGenre = Genre::where('name', $genre)
                    ->first();
                if($checkGenre){
                    $genre_id = $checkGenre->id;
                }else{
                    $storeGenre = new Genre();
                    $storeGenre->name = $genre;
                    $storeGenre->save();
                    $storeGenre->fresh();

                    $genre_id = $storeGenre->id; 
                }

                $storeComicGenre = new ComicGenre();
                $storeComicGenre->comic_id = $storeComic->id;
                $storeComicGenre->genre_id = $genre_id;
                $storeComicGenre->save();
            }

            foreach($comicChapter as $chapter){
                $storeChapterLink = new ComicChapterLink();
                $storeChapterLink->comic_id = $storeComic->id;
                $storeChapterLink->chapter = str_replace('Chapter ', '', $chapter['chapter']);
                $storeChapterLink->link = $chapter['link_chapter'];
                $storeChapterLink->chapter_realease = $chapter['specific_date'];
                $storeChapterLink->status = 0;
                $storeChapterLink->save();
            }

            DB::commit();
            return response()
                ->json([
                    'status' => 'success', 
                    'code' => 201, 
                    'message' => 'Success store data',
                ], 201);
        }catch(\Except $e){
            DB::rollback();
            return response()
                ->json([
                    'status' => 'failed', 
                    'code' => 500, 
                    'message' => $e->getMessage()
                ], 500);
        }
    }

    public function comicChapterProcess(Request $request)
    {
        $comicTitle = $request->comic_title;
        if(!$comicTitle){
            return response()
                ->json([
                    'status' => 'failed', 
                    'code' => 422, 
                    'message' => 'Please input comic title'
                ], 422);
        }
        
        $checkComic = Comic::where('title', $comicTitle)
            ->select('id')
            ->first();

        if(!$checkComic){
            return response()
                ->json([
                    'status' => 'failed', 
                    'code' => 400, 
                    'message' => 'no data comic.'
                ]);
        }   

        $chapters = ComicChapterLink::where('comic_id', $checkComic->id)
            ->orderBy('chapter', 'ASC')
            ->get();

        foreach ($chapters as $chapter) {
            $crawlChapter = $this->crawlImageChapter($chapter->link);
            $images = [];
            foreach ($crawlChapter['images'] as $image) {
                $images[] = str_replace('\\', '', $image);
            }
        
            $storeChapter = new ComicChapter();
            $storeChapter->comic_id = $checkComic->id;
            $storeChapter->chapter_number = "Chapter ".$chapter->chapter;
            $storeChapter->chapter_title = $crawlChapter['title_text'];
            $storeChapter->chapter_content = json_encode($images); // Menggunakan json_encode
            $storeChapter->save();
        }
            
        return response()
            ->json([
                'status' => 'success', 
                'code' => 201, 
                'mesage' => 'Success crawl image chapter'
            ], 201);
    }

    public function crawlComic($url){
        $response = Http::get($url);
    
        if ($response->ok()) {
            $html = $response->body();
            $crawler = new Crawler($html);
            $result = [];
    
            $crawler->filter('.spe')->each(function ($node) use (&$result) {
                $spanValues = [];
    
                $node->filter('span')->each(function ($spanNode) use (&$spanValues) {
                    $text = $spanNode->text();
                    [$key, $value] = array_map('trim', explode(':', $text, 2));
                    $key = strtolower(str_replace(' ', '_', $key));
                    $spanValues[$key] = $value;
                });
    
                $result['data'] = $spanValues;
            });
            $titles = $crawler->filter('.entry-title')->extract(['_text']);
            $result['data']['title'] = $titles[0] ?? '';

            $genres = $crawler->filter('.genre-info a')->extract(['_text']);

            if (!isset($result['data'])) {
                $result['data'] = [];
            }

            $result['data']['genre'] = implode(', ', $genres);

            $contentParagraphs = $crawler->filter('.entry-content-single p')->each(function ($node) {
                return $node->text();
            });

            $rating = $crawler->filter('.archiveanime-rating i')->each(function ($node) {
                return $node->text();
            });

            $result['data']['rating'] = $rating[0];
            $result['data']['description'] = $contentParagraphs[0];
            $images = $crawler->filter('.thumb img')->each(function ($node) {
                $imageUrl = $node->attr('src');
                $fileName = basename(parse_url($imageUrl, PHP_URL_PATH));
                $imageContent = file_get_contents($imageUrl);
                $savePath = public_path('images/' . $fileName);
                File::put($savePath, $imageContent);
                return 'images/' . $fileName;
            });

            $result['data']['images'] = $images;
    
            return $result;
        } else {
            return [];
        }
    }

    public function crawlComicChapter($url){
        $response = Http::get($url);
    
        if ($response->ok()) {
            $html = $response->body();
            $crawler = new Crawler($html);
            $result = [];
    
            $links = $crawler->filter('.lchx a');
            $dates = $crawler->filter('.dt');
    
            $dates->each(function ($node, $i) use (&$result, $links) {
                $chapterTitle = $links->eq($i)->text();
                $linkChapter = $links->eq($i)->attr('href');
                $dateText = $node->filter('a')->text();
    
                $specificDate = null;
    
                if (preg_match('/(\d+) bulan yang lalu/', $dateText, $matches)) {
                    $timeAgo = intval($matches[1]);
                    $specificDate = new DateTime("-$timeAgo month");
                } elseif (preg_match('/(\d+) minggu yang lalu/', $dateText, $matches)) {
                    $timeAgo = intval($matches[1]);
                    $specificDate = new DateTime("-$timeAgo week");
                } elseif (preg_match('/(\d+) hari yang lalu/', $dateText, $matches)) {
                    $timeAgo = intval($matches[1]);
                    $specificDate = new DateTime("-$timeAgo day");
                } elseif (preg_match('/(\d+) menit yang lalu/', $dateText, $matches)) {
                    $timeAgo = intval($matches[1]);
                    $specificDate = new DateTime("-$timeAgo minute");
                } elseif (preg_match('/(\d+) tahun yang lalu/', $dateText, $matches)) {
                    $timeAgo = intval($matches[1]);
                    $specificDate = new DateTime("-$timeAgo year");
                }
    
                $result[] = [
                    'chapter' => $chapterTitle,
                    'link_chapter' => $linkChapter,
                    'original_time' => $dateText,
                    'specific_date' => $specificDate ? $specificDate->format('Y-m-d H:i:s') : null,
                ];
            });
    
            return $result;
        } else {
            return response()->json([], 500);
        }
    } 

    public function crawlImageChapter($url)
    {
        $response = Http::get($url);

        if ($response->ok()) {
            $html = $response->body();
            $crawler = new Crawler($html);
            $result = [];

            $crawler->filter('#chimg-auh img')->each(function ($node) use (&$result) {
                // Ambil tag HTML dari setiap gambar
                $imageHTML = $node->outerHtml();

                // Hapus karakter '\'
                $cleanedHTML = str_replace('\\', '', $imageHTML);

                // Simpan tag HTML yang telah dibersihkan ke dalam array
                $result[] = $cleanedHTML;
            });

            // Menambahkan logika untuk mendapatkan teks dari class entry-title
            $titleText = $crawler->filter('.entry-title')->text();

            return [
                'images' => $result,
                'title_text' => $titleText // Menambahkan teks dari class entry-title ke respons JSON
            ];
        }

        return response()->json([
            'error' => 'Gagal mendapatkan HTML'
        ], 500);
    }


}
