<?php

class NumGen {
    public static $maxElements;
    public static function generate_numbers() : array {
        self::$maxElements = rand(10,20);
        $elements = [];

        for($i = 0; $i < self::$maxElements; $i++) {
            $elements[] = rand(10,99);
        }
        return $elements;
    }
}