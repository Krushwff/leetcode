<?php
// Source : https://leetcode.com/problems/split-a-string-in-balanced-strings/description/
// Author : Krayushkin Georgii
// Date   : 2024-04-11
/**********************************************************************************
 * Balanced strings are those that have an equal quantity of 'L' and 'R' characters.
 *
 * Given a balanced string s, split it into some number of substrings such that:
 *
 * Each substring is balanced.
 * Return the maximum number of balanced strings you can obtain.
 *
 *
 *
 * Example 1:
 *
 * Input: s = "RLRRLLRLRL"
 * Output: 4
 * Explanation: s can be split into "RL", "RRLL", "RL", "RL", each substring contains same number of 'L' and 'R'.
 * Example 2:
 *
 * Input: s = "RLRRRLLRLL"
 * Output: 2
 * Explanation: s can be split into "RL", "RRRLLRLL", each substring contains same number of 'L' and 'R'.
 * Note that s cannot be split into "RL", "RR", "RL", "LR", "LL", because the 2nd and 5th substrings are not balanced.
 * Example 3:
 *
 * Input: s = "LLLLRRRR"
 * Output: 1
 * Explanation: s can be split into "LLLLRRRR".
***********************************************************************************/
function balancedStringSplit($s)
{
    $split = str_split($s);
    $rCounter = 0;
    $lCounter = 0;
    $counter = 0;

    foreach ($split as $item) {
        if ($item === 'R') {
            $rCounter++;
        } else if ($item === 'L') {
            $lCounter++;
        }

        if ($rCounter === $lCounter) {
            $counter++;
        }
    }

    return $counter;
}