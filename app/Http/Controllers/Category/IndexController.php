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
     $categories = Category::all();
     $posts = Post::all();
        foreach($posts as $post) {
          $date = Carbon::parse($post->created_at);
      }
    
    
     return view('category.index', compact('categories', 'posts', 'date'));
   }
}
