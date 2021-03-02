<?php

namespace Tests\Unit\Snack;

use Snack\App;
use Snack\Interfaces\Db;
use Tests\TestCase;

use function PHPUnit\Framework\assertInstanceOf;

final class AppTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        $this->app = \Snack\App::getInstance();
    }

    public function testInstance()
    {
        $this->assertInstanceOf(App::class, $this->app);
    }

    public function testAppDb()
    {
        $this->assertInstanceOf(Db::class, $this->app->db);
    }

    public function testClone()
    {
        $this->expectException(\Throwable::class);
        clone $this->app;
    }

    public function testRun()
    {
        $this->app->run();
        //$this->expectOutputString('Hello World!');
    }
}
