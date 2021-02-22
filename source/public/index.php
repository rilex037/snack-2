<?php

require_once '../vendor/autoload.php';

$app = \Snack\App::getInstance()
    ->setDb(new \Snack\Db\Drivers\DbPdo());

var_dump(
    (new \DatabaseSeeder())->run()


);

$app->run();
