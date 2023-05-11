<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class AppTest extends KernelTestCase
{
    public function testKernelBootsWithoutErrors(): void
    {
        self::bootKernel();
        $this->assertTrue(self::$kernel instanceof \Symfony\Component\HttpKernel\Kernel);
    }
}
