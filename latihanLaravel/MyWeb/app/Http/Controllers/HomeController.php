<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $a = 5;
        $data['x'] = 10;
        $data['y'] = 4;
        $data['z'] = 2;
        return view('homePage', ['a' => $a, 'datas' => $data]);
    }
}
