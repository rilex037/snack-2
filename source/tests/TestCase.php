<?php

namespace Tests;

use PHPUnit\Framework\TestCase as FrameworkTestCase;

Abstract class TestCase extends FrameworkTestCase
{
    public function setUp(): void
    {
        $_SERVER['DOCUMENT_ROOT'] =  '/var/www/html/public';
    }
}
