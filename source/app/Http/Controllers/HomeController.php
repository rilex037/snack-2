<?php

namespace App\Http\Controllers;

use Snack\Http\Controller\Controller;

class HomeController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        echo $this->app->templates->render('pages/page');
    }
}
