<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtController extends Controller
{
    public function show($articleId)
    {
        # code...
        dd($articleId);
    }
}
