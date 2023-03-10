<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }
    public function about() {
        return 'Name: Natasha Dwi Pramudita <br> NIM: 2141720147';
    }
    public function articles(Request $request, $id) {
        return 'Halaman Artikel dengan ID '.$id;
    }
}
