<?php

namespace Tests\Unit\Snack\Console\Db;

use Tests\TestCase;

class SeedTest  extends TestCase
{
    public function testHandle()
    {
        (new \Snack\Console\Db\Seed())->handle();
        $this->expectOutputString("SEED\n");
    }
}
