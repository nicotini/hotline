<?php

namespace App\Http\Controllers\Tag\Post;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use App\Models\Post;

use Carbon\Carbon;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isEmpty;

class IndexController extends Controller
{
   public function __invoke(Tag $tag) 
   {
     $posts = $tag->posts()->paginate(4);
     
       
        foreach($posts as $post) {
          $post['date'] = Carbon::parse($post->created_at);
      }
   
     return view('tag.post.index', compact('posts'));
   }
}
