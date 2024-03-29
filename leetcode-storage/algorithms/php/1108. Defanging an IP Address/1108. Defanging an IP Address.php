<?php
// Source : https://leetcode.com/problems/defanging-an-ip-address/description/
// Author : Krayushkin Georgii
// Date   : 2024-03-30
/**********************************************************************************
*Given a valid (IPv4) IP address, return a defanged version of that IP address.
 *
 * A defanged IP address replaces every period "." with "[.]".
 *
 *
 *
 * Example 1:
 *
 * Input: address = "1.1.1.1"
 * Output: "1[.]1[.]1[.]1"
 * Example 2:
 *
 * Input: address = "255.100.50.0"
 * Output: "255[.]100[.]50[.]0"
***********************************************************************************/
function defangIPaddr($address) {
    return str_ireplace('.', '[.]', $address);

}