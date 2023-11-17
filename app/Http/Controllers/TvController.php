<?php

namespace App\Http\Controllers;


use App\Models\Tv;
use Illuminate\Http\Request;

class TvController extends Controller
{
    public function index()
    {
        return view ('tv.all', [
            "title" => "Halaman Tv",
            "tv" => Tv::all(),
        ]);
    }

    public function show($tvs)
    {
        return view ('tv.detail', [
            'title' => 'detail-tv',
            'tv' => Tv::find($tvs),
        ]);
    }
}
