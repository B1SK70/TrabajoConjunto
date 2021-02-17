<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index(){
        return view('index');
    }
    public function tipos(){
        return view('tipos');
    }
    public function historia(){
        return view('historia');
    }
    public function contacto(){
        return view('contacto');
    }
}
