<?php
 
namespace App\View\Composers;
 
use Illuminate\View\View;

use App\Models\Category;
 
class CategoryComposer
{
    /**
     * The user repository implementation.
     *
     * @var \App\Repositories\UserRepository
     */
    protected $carts;
 
    /**
     * Create a new profile composer.
     *
     * @param  \App\Repositories\UserRepository  $users
     * @return void
     */
    // public function __construct()
    // {
        
    // }

 
    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $categories = Category::where('parent_id',0)->with('sub_cats')->get();
        $view->with('categories', $categories);
    }
}