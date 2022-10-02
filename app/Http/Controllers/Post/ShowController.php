<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Post $post)
    {
       
       $relatedPosts = Post::where('category_id', $post->category_id)
       ->where('id', '!=', $post->id)
       ->get()
       ->take(4);
        return view('post.show', compact('post','relatedPosts'));
    }
}
