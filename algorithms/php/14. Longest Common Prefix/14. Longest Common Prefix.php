<?php
// Source : https://leetcode.com/problems/longest-common-prefix/description/
// Author : Krayushkin Georgii
// Date   : 2024-03-31
/**********************************************************************************
*Write a function to find the longest common prefix string amongst an array of strings.
 *
 * If there is no common prefix, return an empty string "".
 *
 *
 *
 * Example 1:
 *
 * Input: strs = ["flower","flow","flight"]
 * Output: "fl"
 * Example 2:
 *
 * Input: strs = ["dog","racecar","car"]
 * Output: ""
 * Explanation: There is no common prefix among the input strings.
***********************************************************************************/
function longestCommonPrefix($strs) {
    $result = $strs[0];
    for ($i = 1; $i < count($strs); $i++) {
        $str = $strs[$i];
        while (substr($str, 0, strlen($result)) != $result && strlen($result) > 0)
            $result = substr($result, 0, strlen($result) - 1);
    }
    return $result;
}