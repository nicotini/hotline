<?php
 
namespace App\View\ViewComposer;

use App\Models\Post;

use App\Repositories\UserRepository;
use Illuminate\View\View;
 
class RecentPostViewComposer
{
    
    public function compose(View $view)
    {
        return $view->with('recentPosts', Post::latest()->get()->take(4));
    }
}