<?php

namespace App\Http\Controllers\Category\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Carbon\Carbon;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isEmpty;

class IndexController extends Controller
{
   public function __invoke(Category $category) 
   {
     $posts = $category->posts()->paginate(6);
     
       if($posts->count() > 0){
        foreach($posts as $post) {
          $post['date'] = Carbon::parse($post->created_at);
      }
    }
    
    
     return view('category.post.index', compact('posts'));
   }
}
