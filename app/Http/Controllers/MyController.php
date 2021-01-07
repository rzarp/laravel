<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    // ini adalah function index yang mereturn view beranda
    public function index() {
        return view('beranda');
    }
    // ini adalah function about yang mereturn view about
    public function about() {
        return view('about');
    }
}
