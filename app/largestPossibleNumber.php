<?php

namespace App;

// we compare two numbers XY (Y appended at the end of X) and YX (X appended at the end of Y).
// If XY is larger, then X should come before Y in output, else Y should come before. For example,
// let X and Y be 542 and 60. To compare X and Y, we compare 54260 and 60542. Since 60542 is greater than 54260, we put Y first.

class LargestPossibleNumber {
    function largestNumber($array)
    {
        for($i=0; $i < count($array)-1; $i++) // looping through all the array
            for($j=$i+1; $j < count($array); $j++) // i starts from 0 while j starts from i+1
                if($array[$i].$array[$j] < $array[$j].$array[$i]) // comparing XY and YX, if XY is less than YX then swap their position
                {
                    $temp = $array[$i];
                    $array[$i] = $array[$j];
                    $array[$j] = $temp;
                }

        $result = '';
        for($k=0; $k < count($array); $k++) { // arrange the array in a string
            $result .= $array[$k];
        }
        return (int)$result; // return the result as an integer
    }
}