<?php
// Source : https://leetcode.com/problems/search-insert-position/
// Author : Krayushkin Georgii
// Date   : 2024-04-03
/**********************************************************************************
 * Given a sorted array of distinct integers and a target value, return the index if the target is found. If not, return the index where it would be if it were inserted in order.
 *
 * You must write an algorithm with O(log n) runtime complexity.
 *
 *
 *
 * Example 1:
 *
 * Input: nums = [1,3,5,6], target = 5
 * Output: 2
 * Example 2:
 *
 * Input: nums = [1,3,5,6], target = 2
 * Output: 1
 * Example 3:
 *
 * Input: nums = [1,3,5,6], target = 7
 * Output: 4
***********************************************************************************/
function searchInsert($nums, $target) {
    $left = 0;
    $right = count($nums) - 1;

    while($left <= $right){
        $mid =  floor(($right + $left) / 2);
        if($nums[$mid] == $target){
            return $mid;
        }else if ($nums[$mid] < $target){
            $left = $mid + 1;
        }else{
            $right = $mid - 1;
        }
    }
    return $left;
}