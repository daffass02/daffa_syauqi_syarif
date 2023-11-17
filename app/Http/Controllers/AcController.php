<?php

namespace App\Http\Controllers;


use App\Models\Ac;

class AcController extends Controller
{
    public function index()
    {
        return view ('ac.all', [
            "title" => "Halaman Ac",
            "Acs" => Ac::all(),
        ]);
    }

    public function show($ac)
   {
       return view ('ac.detail', [
          'title' => 'detail-ac',
         'ac' => Ac::find($ac)
      ]);
    }
}
