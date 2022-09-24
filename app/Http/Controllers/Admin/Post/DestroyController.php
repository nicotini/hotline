<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\Post\BaseController;
use App\Models\Post;
use Illuminate\Http\Request;

class DestroyController extends BaseController
{
    public function __invoke(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.post.index');
        
    }
}
