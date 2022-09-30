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
       $date = Carbon::parse($post->created_at);
       $relatedPosts = Post::where('category_id', $post->category_id)
       ->where('id', '!=', $post->id)
       ->get()
       ->take(4);
       $recentPosts = Post::latest()->get()->take(4);
      
        $categories = Category::all();
        $tags = Tag::all();
      
        return view('post.show', compact('post', 'date', 'relatedPosts', 'recentPosts', 'categories', 'tags' ));
    }
}
