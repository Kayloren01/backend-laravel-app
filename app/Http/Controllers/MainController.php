<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $path = public_path('articles.json');
        $json_string = file_get_contents($path);
        $data = json_decode($json_string, true);
        
        return view('welcome', ['data' => $data]);
    }
}