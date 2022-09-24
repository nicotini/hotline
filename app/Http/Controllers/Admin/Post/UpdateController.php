<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Post $post)
    {
        $data = $request->validated();
        $tagIds=[];
        $tagIds = $data['tag_ids'];
        if(isset( $data['tag_ids'])) {
            unset($data['tag_ids']);
        }
       
        $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
        $data['main_image'] = Storage::disk('public')->put('/images', $data['main_image']);
        $post->tags()->sync($tagIds);
        $post->update($data);
        
       return redirect()->route('admin.post.show', compact('post'));
    }
}
