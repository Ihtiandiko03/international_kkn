<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('index');
    }
    public function struktur(){
        return view('struktur');
    }
    public function registration(){
        return view('registration');
    }
}
