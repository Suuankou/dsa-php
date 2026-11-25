<?php

namespace Core\Sorting;

class Fibonacci{
    public static $first = 0;
    public static $second = 1;
    public $limit;

    private function set_limit($limit) : int{
       return $this->limit = $limit -1;
    }

    public function calculate($numbers, $limit) : array  {
        $numbers = [self::$first, self::$second];
        $this->limit = $this->set_limit(($limit - count($numbers)));

        for($i = 0; $i <= $this->limit; $i++){
            $sum = $numbers[$i] + $numbers[$i + 1];
            $numbers[] = $sum;
        }
        return $numbers;
    }

    public function calculate_rec($numbers, $limit) {
        $numbers = [self::$first, self::$second];

        $rec = function($numbers, $limit) use (&$rec) {
            if (count($numbers) >= $limit) return $numbers;
            // Add last and near-last
            $numbers[] = $numbers[count($numbers) - 1] + $numbers[count($numbers) - 2];
            return $rec($numbers, $limit);
        };
        return $rec($numbers, $limit);
    }
}