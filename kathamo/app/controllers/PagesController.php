<?php

namespace Kathamo\Controllers;

use Kathamo\Core\App;
use function Kathamo\Core\view;

class PagesController
{

    public function home()
    {
        $tasks = App::get('database')->selectAll('todos');
        return view('index', ['tasks' => $tasks]);
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function culture()
    {
        return view('about-culture');
    }
}
