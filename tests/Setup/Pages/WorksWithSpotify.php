<?php

namespace Tests\Setup\Pages;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;

trait WorksWithSpotify
{
    protected $filePath = __DIR__ . '\html';

    protected function fakeToSpotifyResponse()
    {
        Http::fake([
            'link.tospotify.com/*' =>
            Http::response(File::get($this->filePath . '\to_spotify.html')),
        ]);
    }
}
