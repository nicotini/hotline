<?php

namespace App\Http\Controllers\Category\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Carbon\Carbon;
use Illuminate\Http\Request;

class IndexController extends Controller
{
   public function __invoke(Category $category) 
   {
     $posts = $category->posts()->paginate(6);
        $recentPosts = Post::latest()->get()->take(4);
        $categories = Category::all();
        $tags = Tag::all();
        foreach($recentPosts as $post) {
          $date = Carbon::parse($post->created_at);
      }
    
    
     return view('category.post.index', compact('posts', 'recentPosts', 'categories', 'tags', 'date' ));
   }
}
