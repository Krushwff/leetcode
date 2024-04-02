<?php
// Source : https://leetcode.com/problems/find-words-containing-character/description/
// Author : Krayushkin Georgii
// Date   : 2024-04-01
/**********************************************************************************
*GYou are given a 0-indexed array of strings words and a character x.
 *
 * Return an array of indices representing the words that contain the character x.
 *
 * Note that the returned array may be in any order.
 *
 *
 *
 * Example 1:
 *
 * Input: words = ["leet","code"], x = "e"
 * Output: [0,1]
 * Explanation: "e" occurs in both words: "leet", and "code". Hence, we return indices 0 and 1.
 * Example 2:
 *
 * Input: words = ["abc","bcd","aaaa","cbc"], x = "a"
 * Output: [0,2]
 * Explanation: "a" occurs in "abc", and "aaaa". Hence, we return indices 0 and 2.
 * Example 3:
 *
 * Input: words = ["abc","bcd","aaaa","cbc"], x = "z"
 * Output: []
 * Explanation: "z" does not occur in any of the words. Hence, we return an empty array.
***********************************************************************************/
function findWordsContaining($words, $x) {
    $result = [];
    foreach($words as $key => $word){
        if(strpos($word, $x) !== false){
            $result[] = $key;
        }
    }

    return $result;
}