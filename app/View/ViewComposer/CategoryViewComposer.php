<?php
 
namespace App\View\ViewComposer;

use App\Models\Category;
use App\Repositories\UserRepository;
use Illuminate\View\View;
 
class CategoryViewComposer
{
    
    public function compose(View $view)
    {
        return $view->with('categories', Category::all());
    }
}