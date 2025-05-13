<?php
/*
Given an array of integers nums and an integer target, return indices of the two numbers such that they add up to target.

You may assume that each input would have exactly one solution, and you may not use the same element twice.

You can return the answer in any order.



Example 1:

Input: nums = [2,7,11,15], target = 9
Output: [0,1]
Explanation: Because nums[0] + nums[1] == 9, we return [0, 1]
*/

class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function permutation(int $n): Generator
    {
        for ($i = 0; $i <= $n; $i++) {
            for ($j = $i; $j <= $n; $j++) {
                if ($i == $j)
                    continue;
                yield [$i, $j];
            }
        }
    }

    function twoSum($nums, $target): array
    {
        foreach ($this->permutation(count($nums)) as $n) {
            $n1 = $nums[$n[0]];
            $n2 = $nums[$n[1]];
            if ($n1 + $n2 == $target) {
                return [$n[0], $n[1]];
            }
        }
        return [-1, -1];
    }

}


(new Solution())->twoSum([2, 7, 11, 15], 9);

