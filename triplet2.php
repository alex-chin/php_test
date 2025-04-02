<?php

class Solution
{

    /**
     * // @param Integer[] $nums
     * @return Integer
     */
    function maximumTripletValue($nums)
    {

        $length = count($nums);

        $max = 0;
        for ($i = 0; $i < $length; $i++)
            for ($j = $i + 1; $j < $length; $j++)
                for ($k = $j + 1; $k < $length; $k++) {
                    $t = ($nums[$i] - $nums[$j]) * $nums[$k];
                    $max  = ($t > $max) ? $t : $max;
                }
        return $max;
    }
}