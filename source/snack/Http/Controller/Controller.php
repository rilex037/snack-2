<?php

namespace Snack\Http\Controller;

use Snack\App;

class Controller
{
    public function __construct()
    {
        $this->app = App::getInstance();
    }

    /*
    public function __call($method, $parameters)
    {
    }*/
}
