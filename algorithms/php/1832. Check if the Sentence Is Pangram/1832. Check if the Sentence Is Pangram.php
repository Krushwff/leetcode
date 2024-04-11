<?php
// Source : https://leetcode.com/problems/check-if-the-sentence-is-pangram/description/
// Author : Krayushkin Georgii
// Date   : 2024-04-11
/**********************************************************************************
 *A pangram is a sentence where every letter of the English alphabet appears at least once.
 *
 * Given a string sentence containing only lowercase English letters, return true if sentence is a pangram, or false otherwise.
 *
 *
 *
 * Example 1:
 *
 * Input: sentence = "thequickbrownfoxjumpsoverthelazydog"
 * Output: true
 * Explanation: sentence contains at least one of every letter of the English alphabet.
 * Example 2:
 *
 * Input: sentence = "leetcode"
 * Output: false
***********************************************************************************/
function checkIfPangram($sentence) {
    $alf = range('a', 'z');
    $result = true;
    $sentence = str_split($sentence, 1);
    for($j = 0; $j < count($alf); $j++){
        if(!in_array($alf[$j], $sentence)){
            $result = false;
            break;
        }
    }
    return $result;
}