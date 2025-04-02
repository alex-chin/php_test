<?php
/*

88. Merge Sorted Array

https://leetcode.com/problems/merge-sorted-array/description/?envType=study-plan-v2&envId=top-interview-150

Easy
Topics
Companies
Hint
You are given two integer arrays nums1 and nums2, sorted in non-decreasing order,
and two integers m and n, representing the number of elements in nums1 and nums2 respectively.

Merge nums1 and nums2 into a single array sorted in non-decreasing order.

The final sorted array should not be returned by the function, but instead be stored inside the array nums1.
To accommodate this, nums1 has a length of m + n, where the first m elements denote the elements that should be merged,
and the last n elements are set to 0 and should be ignored. nums2 has a length of n.

Окончательный отсортированный массив не должен возвращаться функцией, а должен храниться внутри массиваnums1 .
Чтобы учесть это, nums1имеет длину m + n, где первые mэлементы обозначают элементы, которые должны быть объединены,
 а последние nэлементы установлены в 0и должны игнорироваться. nums2имеет длину n.

*/

class Solution
{

    /**
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return void
     */
    function merge(&$nums1, $m, $nums2, $n): void
    {
        $n1 = array_slice($nums1, 0, $m);
        if ($m == 0) {
            $nums1 = $nums2;
            return;
        } elseif ($n == 0) {
            return;
        }
        $nums1 = [];
        $iterator1 = new ArrayIterator($n1);
        $iterator2 = new ArrayIterator($nums2);
        while (true) {
            $c1 = $iterator1->current();
            $c2 = $iterator2->current();
            if ($c1 < $c2) {
                $nums1[] = $c1;
                $iterator1->next();
            } else {
                $nums1[] = $c2;
                $iterator2->next();
            }
            if (!$iterator1->valid()) {
                $nums1 = array_merge($nums1, array_slice($nums2, $iterator2->key()));
                break;
            }
            if (!$iterator2->valid()) {
                $nums1 = array_merge($nums1, array_slice($n1, $iterator1->key()));
                break;
            }

        }

    }
}

$s = new Solution();

//ex3
//$nums1 = [1, 2, 3, 0, 0, 0];
//$m = 3;
//$nums2 = [2, 5, 6];
//$n = 3;

//ex2
//$nums1 = [1];
//$m = 1;
//$nums2 = [];
//$n = 0;

// ex3
//$nums1 = [0];
//$m = 0;
//$nums2 = [1];
//$n = 1;

//ex3
$nums1 = [4, 0, 0, 0, 0, 0];
$m = 1;
$nums2 = [1, 2, 3, 5, 6];
$n = 5;


$s->merge($nums1, $m, $nums2, $n);
print_r($nums1);
