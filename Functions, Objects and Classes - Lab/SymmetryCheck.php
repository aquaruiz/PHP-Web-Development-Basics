<?php
function isPalindrome(string $str) : string {
    return $str == strrev($str) ? "true" : "false";
}

echo isPalindrome(readline());
?>