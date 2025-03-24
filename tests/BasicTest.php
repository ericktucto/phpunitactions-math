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
    public function testSumIntegerAndFloat(): void
    {
        $a = new Number(5, 8);
        $b = new Number(6, 9);

        $result = Basic::sum($a, $b);

        $this->assertInstanceOf(Number::class, $result);
        $this->assertEquals(
            12,
            $result->integer,
        );
        $this->assertEquals(
            7,
            $result->float,
        );
    }

    public function testSubOnlyIntegers(): void
    {
        $a = new Number(5);
        $b = new Number(6);

        $result = Basic::sub($b, $a);

        $this->assertInstanceOf(Number::class, $result);
        $this->assertEquals(
            1,
            $result->integer,
        );
        $this->assertEquals(
            0,
            $result->float,
        );
    }

    public function testSubWithIntegerAndFloat(): void
    {
        $a = new Number(5, 4);
        $b = new Number(6, 8);

        $result = Basic::sub($b, $a);

        $this->assertInstanceOf(Number::class, $result);
        $this->assertEquals(
            1,
            $result->integer,
        );
        $this->assertEquals(
            2,
            $result->float,
        );
    }
}
