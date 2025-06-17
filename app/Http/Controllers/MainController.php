<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        $data = [
            'valor3'=> 'valor3 veio do MainController',
        ];

        return view('home')->with($data);
    }
}
