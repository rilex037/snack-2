<?php

use Dotenv\Dotenv;
use League\Plates\Engine;

require_once dirname(__FILE__) . '/vendor/autoload.php';

$dotenv = Dotenv::createImmutable(dirname(__FILE__))->load();

$app = \Snack\App::getInstance()
    ->setDb(new \Snack\Db\Drivers\DbPdo())
    ->setTemplates(new Engine(dirname(__FILE__) . '/resource/views/'))
    ->setRouter(new \Bramus\Router\Router());

$router = $app->router;
require_once dirname(__FILE__) . '/routes/web.php';

return $app;
