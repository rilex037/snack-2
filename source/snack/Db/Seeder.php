<?php

namespace Snack\Db;

use Snack\App;


class Seeder
{
    /**
     * @var \Snack\Interfaces\Db $db
     */
    public $db;

    public function __construct()
    {
        $this->db = App::getInstance()->db;
    }

    public function call()
    {
    }
}
