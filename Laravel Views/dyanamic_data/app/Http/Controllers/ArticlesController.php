<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function show($articleId)
    {
        # code...
        dd($articleId); # dump & die 
    }
}
