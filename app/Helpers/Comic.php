<?php
use Carbon\Carbon;
use App\Models\Comic;
use App\Models\ComicView;
use App\Models\ComicChapter;

function getTopComicsWeek()
{
    $weekAgo = Carbon::now()->subWeek();

    $topComicsWeek = Comic::whereHas('comicViews', function ($query) use ($weekAgo) {
        $query->where('created_at', '>=', $weekAgo);
    })
    ->orderBy('view_count', 'desc')
    ->take(10)
    ->get();

    if ($topComicsWeek->count() < 10) {
        $randomComics = Comic::orderBy('rating', 'DESC')
            ->take(12 - count($topComicsWeek))
            ->get();

        $topComicsWeek = $topComicsWeek->merge($randomComics);
    }

    return $topComicsWeek;
}

function getTopComicsMonth()
{
    $monthAgo = Carbon::now()->subMonth();

    $topComicsMonth = Comic::whereHas('comicViews', function ($query) use ($monthAgo) {
        $query->where('created_at', '>=', $monthAgo);
    })
    ->orderBy('view_count', 'desc')
    ->take(10)
    ->get();

    if ($topComicsMonth->count() < 10) {
        $randomComics = Comic::inRandomOrder()
            ->take(12 - $topComicsMonth->count())
            ->get();

        $topComicsMonth = $topComicsMonth->merge($randomComics);
    }

    return $topComicsMonth;
}

function getTopComicsAllTime()
{
    $topComicsAllTime = Comic::orderBy('view_count', 'desc')
        ->take(10)
        ->get();

    return $topComicsAllTime;
}


function getTopRatedComics()
{
    return Comic::inRandomOrder()
        ->orderBy('rating', 'desc')
        ->take(10)
        ->get();
}

function formatNumber($number)
{
    if (strpos($number, '/') !== false) {
        [$whole, $fraction] = explode('/', $number);
        $formatted_fraction = rtrim(number_format($fraction / 10, 1, ',', ''), '0');
        $number = $whole . str_replace(',', '', $formatted_fraction);

        if(strlen($number) === 1) {
            $number .= '0';
        }

        $formatted_number = $number;
    } else {
        if (strlen($number) === 1 && strpos($number, ',') === false) {
            $number .= '0';
        }

        $formatted_number = ceil($number * 10) / 10;
        $formatted_number = rtrim(number_format($formatted_number, 1, ',', ''), '0');
        $formatted_number = rtrim($formatted_number, ',');
        $formatted_number = str_replace(',', '', $formatted_number);

        if(strlen($formatted_number) === 1) {
            $formatted_number .= '0';
        }
    }

    return $formatted_number;
}