<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RobotsController extends Controller
{
    public function generate()
    {
        $content = "User-agent: *" . PHP_EOL;
        $content .= "Disallow: /admin" . PHP_EOL;
        $content .= "Disallow: /private" . PHP_EOL;
        // Tambahkan aturan tambahan sesuai kebutuhan

        return response($content)->header('Content-Type', 'text/plain');
    }
}
