<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Carbon\Carbon;
use Illuminate\Http\Request;

class IndexController extends Controller
{
   public function __invoke() 
   {
    
        $recentPosts = Post::latest()->get()->take(4);
        $posts = Post::all();
        $categories = Category::all();
        $tags = Tag::all();
        foreach($posts as $post) {
          $date = Carbon::parse($post->created_at);
      }
    
    
     return view('category.index', compact('recentPosts', 'categories', 'tags', 'date'));
   }
}
