<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('view');
    }

    public function produk() {
        return view('produk');
    }

    public function tentang() {
        return view('tentang');
    }

    public function kontak() {
        return view('kontak');
    }

    public function faq() {
        return view('faq');
    }
}
