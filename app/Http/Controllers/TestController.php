<?php

namespace App\Http\Controllers;

use App\Models\Blog\Post;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function check():void
    {
        $psots = Post::whereId(1)->first()->toArray();
        dd($psots);

    }
}
