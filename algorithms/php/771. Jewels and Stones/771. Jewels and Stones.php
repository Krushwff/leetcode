<?php
// Source : https://leetcode.com/problems/jewels-and-stones/description/
// Author : Krayushkin Georgii
// Date   : 2024-04-01
/**********************************************************************************
*You're given strings jewels representing the types of stones that are jewels, and stones representing the stones you have. Each character in stones is a type of stone you have. You want to know how many of the stones you have are also jewels.
 *
 * Letters are case sensitive, so "a" is considered a different type of stone from "A".
 *
 *
 *
 * Example 1:
 *
 * Input: jewels = "aA", stones = "aAAbbbb"
 * Output: 3
 * Example 2:
 *
 * Input: jewels = "z", stones = "ZZ"
 * Output: 0
***********************************************************************************/
function numJewelsInStones($J, $S) {
    $result = 0;
    for ($i = 0; $i < strlen ($J); $i++) {
        $result += substr_count ($S, $J[$i]);
    }
    return $result;
}