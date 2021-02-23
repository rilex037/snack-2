<?php

namespace Snack;

class App
{
    public $db;

    /**
     * @var array $env
     */
    private $env;

    private static ?App $app = null;

    public static function getInstance(): App
    {
        if (static::$app === null) {
            static::$app = new static();
        }

        return static::$app;
    }

    public function setDb(\Snack\Interfaces\Db $db)
    {
        if (!$this->db) {
            $this->db = new $db();
        }
        return $this;
    }

    public function run()
    {
        echo 'Hello World!';
    }

    private function __construct()
    {
        self::loadHelpers();
        $this->env = \Dotenv\Dotenv::createImmutable(dirname($_SERVER["DOCUMENT_ROOT"], 1))->load();
    }

    /**
     * @codeCoverageIgnore
     */
    private function __clone()
    {
    }

    /**
     * @codeCoverageIgnore
     */
    private function __wakeup()
    {
    }

    private static function loadHelpers(): void
    {
        if (file_exists(dirname('helpers.php'))) {
            require_once 'helpers.php';
        }
    }
}
