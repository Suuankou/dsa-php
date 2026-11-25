<?php

namespace Core\Sorting;

class Traverse
{
    public static function lowest($numbers){
         $tempLow = $numbers[0];
         foreach($numbers as $number){
             if($number <= $tempLow){
                 $tempLow = $number;
             }
         }
         return $tempLow;
    }

}