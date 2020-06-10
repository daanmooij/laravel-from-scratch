<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show($post)
    {
        $posts = [
            'John Doe is not Joe Black',
            'Brad Pitt is Death and Taxes'
        ];

        if (!array_key_exists($post, $posts)) {
            abort(404, "That post wasn't found");
        }

        return $posts[$post];
    }
}
