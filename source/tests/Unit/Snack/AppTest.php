<?php

namespace Tests\Unit\Snack;

use Tests\TestCase;

use function PHPUnit\Framework\assertInstanceOf;

final class AppTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        $this->app = \Snack\App::getInstance()
            ->setDb(new \Snack\Db\Drivers\DbPdo());
    }

    public function testInstance()
    {
        assertInstanceOf('\Snack\App', $this->app);
    }

    public function testAppDb()
    {
        assertInstanceOf('\Snack\Interfaces\Db', $this->app->db);
    }

    public function testClone()
    {
        $this->expectException(\Throwable::class);
        $new = clone $this->app;
    }

    public function testRun(){
        $this->app->run();
        $this->expectOutputString( 'Hello World!');
    }
}
