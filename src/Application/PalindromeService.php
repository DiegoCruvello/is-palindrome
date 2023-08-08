<?php

class PalindromeService
{
    public function isPalindrome($str): bool
    {
        $palindrome = new Palindrome($str);
        return $palindrome->isPalindrome();
    }
}