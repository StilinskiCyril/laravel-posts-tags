<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index(Tag $tag)
    {
        $posts = $tag->posts;
        $tags = Tag::all();
        return view('welcome')
            ->with([
                "posts" => $posts,
                "tags" => $tags
            ]);
    }
}
