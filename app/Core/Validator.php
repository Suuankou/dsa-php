<?php

namespace Core;

class Validator
{
    public static function string($value, $min = 1, $max = INF)
    {
        $value = self::trimmed($value);

        return strlen($value) >= $min && strlen($value) <= $max;
    }

    public static function trimmed($value)
    {
        return trim($value);
    }
}
