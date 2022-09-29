<?php

namespace App\Http\Controllers\Post;

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
    $posts = Post::paginate(4);
    $categories = Category::all();
    $recentPosts = Post::latest()->get()->take(4);
    $tags = Tag::all();
    foreach($posts as $post) {
      $date = Carbon::parse($post->created_at);
  }
    
     return view('post.index', compact('posts', 'categories', 'recentPosts', 'tags', 'date'));
   }
}
