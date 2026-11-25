<?php

class Print_BS{
    public static function print_rows($data_array){
        echo "<div class='flex flex-grow justify-center items-center gap-4'>";
        foreach($data_array as $index => $value){
            echo "[". $index . "]";
            if($value == 55){
                echo "<p class='font-bold text-red-600'>" . $value .   "</p>";
            }
            else{
                echo "<p class='text-blue-600'>" . $value . "</p>";
            }
        }
        echo "</div>";
        echo "<hr>";
    }
}
