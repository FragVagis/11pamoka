<?php

namespace App\Controllers;

use App\App;
use App\DB\Json;

class HomeController {

    public function home()
    {
        $title = 'HOME';
        $welcome = 'Hello from fancy zoo!';

        new Json;

        return App::view('home', ['title' => $title, 'welcome' => $welcome]);
    }
    
}