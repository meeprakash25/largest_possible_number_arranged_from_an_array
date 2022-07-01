<?php

namespace App;

class LargestNumber {
    public function nthLargestNumber(&$array, $N) 
    {
        $length = count($array);
        if($length<$N){
            return false;
        }

        for($i = 0; $i < $length ; $i++)
        {
            $low = $i;
            for($j = $i + 1; $j < $length ; $j++)
            {
                if ($array[$j] < $array[$low])
                {
                    $low = $j;
                }
            }
            
            // swap the minimum value to $ith node
            if ($array[$i] > $array[$low])
            {
                $tmp = $array[$i];
                $array[$i] = $array[$low];
                $array[$low] = $tmp;
            }
        }
        return $array[$length-$N];
    }
}