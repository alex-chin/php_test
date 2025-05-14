<?php
/*
 * 9. Palindrome Number
Easy
Topics
Companies
Hint
Given an integer x, return true if x is a palindrome, and false otherwise.



Example 1:

Input: x = 121
Output: true
Explanation: 121 reads as 121 from left to right and from right to left.
Example 2:

Input: x = -121
Output: false
Explanation: From left to right, it reads -121. From right to left, it becomes 121-. Therefore it is not a palindrome.
Example 3:

Input: x = 10
Output: false
Explanation: Reads 01 from right to left. Therefore it is not a palindrome.

 */

class Solution
{

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x)
    {
        if ($x < 0)
            return false;
        $digits = (int) log10($x) + 1;
        if ($digits == 1)
            return true;

        return $digits;
    }
}

//echo (new Solution())->isPalindrome(2 ** 32), "\n";
//echo 2 ** 32;
//echo 121 - 121 % 100;
$d = (int) (121 / 100);
echo $d;
