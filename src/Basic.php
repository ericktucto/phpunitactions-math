<?php

namespace Math;

class Basic
{
    public static function sum(Number $a, Number $b): Number
    {
        $float = $a->float + $b->float;
        $additional = $float % 10;
        $integer = $a->integer + $b->integer + $additional;
        return new Number($integer, $float);
    }
}
