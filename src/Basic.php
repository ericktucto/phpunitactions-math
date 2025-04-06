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
        $additional = 0;
        $float = $a->float - $b->float;
        if (0 > $float) {
            $additional = 10 * strlen("{$a->float}");
            $float += $additional;
        }
        $integer = $a->integer - $b->integer;
        if ($additional) {
            $integer--;
        }
        return new Number($integer, $float);
    }
}
