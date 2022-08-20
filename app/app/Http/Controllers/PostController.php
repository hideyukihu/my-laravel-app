<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    private $posts =[
        'TitleA',
        'TitleB',
        'TitleC',

];

    public function index()
    {

        return view('index')->with(['posts' => $this->posts]);
    }

}
