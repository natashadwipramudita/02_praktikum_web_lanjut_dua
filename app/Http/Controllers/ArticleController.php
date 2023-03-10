<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function articles(Request $request, $id) {
        return 'Halaman Artikel dengan ID '.$id;
    }
}
