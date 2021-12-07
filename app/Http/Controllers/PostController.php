<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Routing\Controller;
use function request;
use function view;

class PostController extends Controller {

    public function index() {

        return view('posts.index', [
            'posts' => Post::latest()->filter(request(['search', 'category']))->get(),
        ]);
    }

    public function show(Post $post) {
        return view('post.show', [
            'post' => $post
        ]);
    }

}
