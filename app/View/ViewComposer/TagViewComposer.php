<?php
 
namespace App\View\ViewComposer;

use App\Models\Tag;
use App\Repositories\UserRepository;
use Illuminate\View\View;
 
class TagViewComposer
{
    
    public function compose(View $view)
    {
        return $view->with('tags', Tag::all());
    }
}