<?php

namespace Tests;

use Dotenv\Dotenv;
use League\Plates\Engine;
use PHPUnit\Framework\TestCase as FrameworkTestCase;

abstract class TestCase extends FrameworkTestCase
{
    public function setUp(): void
    {
    }
}
