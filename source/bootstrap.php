<?php

use Dotenv\Dotenv;

require_once dirname(__FILE__) . '/vendor/autoload.php';

$dotenv = Dotenv::createImmutable(dirname(__FILE__))->load();

$app = \Snack\App::getInstance()
    ->setDb(new \Snack\Db\Drivers\DbPdo())
    ->setRouter(new \Bramus\Router\Router());

$router = $app->router;
require_once dirname(__FILE__) . '/routes/web.php';

return $app;
