<?php

namespace App\Http\Composers;
use Illuminate\View\View;

class TestComposers
{
    
    public function compose(View $view)
    {
    $view->with('view_message', 'This is Test'); 
    }

}