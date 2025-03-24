<?php

namespace Tests;

use Math\Basic;
use Math\Number;
use PHPUnit\Framework\TestCase;

class BasicTest extends TestCase
{
    public function testSumOnlyIntegers(): void
    {
        $a = new Number(5);
        $b = new Number(6);

        $result = Basic::sum($a, $b);

        $this->assertInstanceOf(Number::class, $result);
        $this->assertEquals(
            11,
            $result->integer,
        );
        $this->assertEquals(
            0,
            $result->float,
        );
    }
}
