<?php

namespace Snack;

class App
{
    public $db;

    /**
     * @var array $env
     */
    protected $env;

    private static $app = null;



    public static function getInstance(): self
    {
        if (self::$app == null) {
            self::$app = new App();
        }
        return self::$app;
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

    /**
     * @codeCoverageIgnore
     */
    protected function __clone()
    {
    }

    protected function __construct()
    {
        self::loadHelpers();
        $this->env = \Dotenv\Dotenv::createImmutable(dirname($_SERVER["DOCUMENT_ROOT"], 1))->load();
    }

    private static function loadHelpers(): void
    {
        if (file_exists(dirname('helpers.php'))) {
            require_once 'helpers.php';
        }
    }
}
