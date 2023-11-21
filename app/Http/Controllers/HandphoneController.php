<?php

namespace App\Http\Controllers;

use App\Models\handphone;
use Illuminate\Http\Request;

class HandphoneController extends Controller
{
    public function index()
    {
        return view ('handphone.all', [
            "title" => "handphone",
            "handphone" => handphone::all(),
        ]);
    }

    public function show(handphone $handphone)
    {
        return view ('handphone.detail', [
            'title' => 'detail.handphone',
            'handphone' => $handphone,
        ]);
    }
}
