<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    Public function index(){
 
        return view('index');
    }

    Public function about(){
        return view('about');
    }

    public function articles(){
        return view('articles');
    }
    public function Ques(){
        return view('question');
    }

    public function dictionary(){
        return view('dictionary');
    }
}
