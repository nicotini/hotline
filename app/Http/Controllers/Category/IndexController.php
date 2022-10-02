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
       
    
    
     return view('category.index', compact('categories', 'posts'));
   }
}
