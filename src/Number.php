<?php

namespace Math;

class Number
{
    public function __construct(
        public readonly int $integer,
        public readonly float $float = 0,
    ) {
    }
}
