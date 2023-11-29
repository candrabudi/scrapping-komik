<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Symfony\Component\DomCrawler\Crawler;
class ComicController extends Controller
{
    public function scrappComicData(Request $request)
    {
        $request->validate([
            'url' => 'required|url'
        ]);

        $url = $request->input('url');

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

                $result['data_komik'] = $spanValues;
            });

            $genres = $crawler->filter('.genre-info a')->extract(['_text']);
            $result['genre'] = implode(', ', $genres);

            $titles = $crawler->filter('.entry-title')->extract(['_text']);
            $result['judul'] = $titles[0] ?? '';

            $links = $crawler->filter('.lchx a')->extract(['href']);
            $result['chapters'] = $links;

            // Mengambil nilai dari tag <p> dalam class .entry-content-single
            $contentParagraphs = $crawler->filter('.entry-content-single p')->each(function ($node) {
                return $node->text();
            });

            $result['content_paragraphs'] = $contentParagraphs;

            return response()->json([
                $result
            ]);
        }

        return response()->json([
            'error' => 'Gagal mendapatkan HTML'
        ], 500);
    }

    public function getAllImageSrc(Request $request)
    {
        $request->validate([
            'url' => 'required|url'
        ]);

        $url = $request->input('url');

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

            return response()->json([
                'images_html' => $result
            ]);
        }

        return response()->json([
            'error' => 'Gagal mendapatkan HTML'
        ], 500);
    }

}