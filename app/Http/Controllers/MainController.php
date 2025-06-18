<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller
{
    public function home(): View
    {
        $data = [
            'valor3'=> 'valor3 veio do MainController',
        ];

        return view('home')->with($data);
    }

    public function showClients(): View
    {
        $clients = [
            ['id'=> 1,'name'=> 'jose', 'phone' => '123456'],
            ['id'=> 2,'name'=> 'jose', 'phone' => '123456'],
            ['id'=> 3,'name'=> 'jose', 'phone' => '123456'],
            ['id'=> 4,'name'=> 'jose', 'phone' => '123456'],
        ];


        return view('clients', compact('clients'));
    }
}
