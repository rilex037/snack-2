<?php

namespace Snack;

class App
{
    /**
     * @var  \Snack\Interfaces\Db $db
     */
    public $db;


    /** 
     * @var \Bramus\Router\Router
     */
    public $router;


    /**
     * @var \League\Plates\Engine $templates
     */
    public $templates;


    private static ?App $app = null;

    public static function getInstance(): App
    {
        if (static::$app === null) {
            static::$app = new static();
        }

        return static::$app;
    }

    public function setDb(\Snack\Interfaces\Db $db): App
    {
        if (!$this->db) {
            $this->db = new $db();
        }
        return $this;
    }

    public function setRouter(\Bramus\Router\Router $router): App
    {
        $this->router = $router;
        return $this;
    }

    public function setTemplates(\League\Plates\Engine $templates)
    {
        $this->templates = $templates;
        return $this;
    }

    public function run()
    {
        $this->router->run();;
    }

    private function __construct()
    {
        self::loadHelpers();
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
