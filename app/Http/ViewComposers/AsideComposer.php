<?php

namespace App\Http\ViewComposers;

use App\Category;
use App\Tag;
use Illuminate\Contracts\View\View;

class AsideComposer
{

    public function compose(View $view)
    {
        $categorias = Category::OrderBy('name', 'ASC')->get();
        $tags       = Tag::OrderBy('name', 'ASC')->get();
        $view->with('categorias', $categorias)
            ->with('tags', $tags);
    }
}
