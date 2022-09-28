<?php

namespace App\Http\Controllers\Personal\Comment;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DestroyController extends Controller
{
    public function __invoke()
    {
        
        return redirect()->route('personal.comment.index');
        
    }
}
