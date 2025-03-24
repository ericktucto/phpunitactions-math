<?php

namespace Math;

class Basic
{
    public static function sum(Number $a, Number $b): Number
    {
        $sumFloat = $a->float + $b->float;
        $float = $sumFloat % 10;
        $additional = (int) ($sumFloat / 10);
        $integer = $a->integer + $b->integer + $additional;
        return new Number($integer, $float);
    }

    public static function sub(Number $a, Number $b): Number
    {
        $integer = $a->integer - $b->integer;
        return new Number($integer, 0);
    }
}
