<?php

namespace Snack\Db;

use Snack\App;

class Seeder
{

    public function __construct()
    {
        $this->db = App::getInstance()->db;
    }

    public function call()
    {
    }
}
