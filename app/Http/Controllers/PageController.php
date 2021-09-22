<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    function getData()
    {
        $data = ['apple', 'nokia', 'samsung', 'xiaomi', 'oppo'];
        return view('pages.service', ['products'=>$data]);

    }
}
