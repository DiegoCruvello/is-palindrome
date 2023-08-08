<?php

class Palindrome 
{
    private $cleanedString;

    public function __construct($str)
    {
        $this->cleanedString = strtolower(str_replace(' ', '', $str));
    }

    public function isPalindrome(): bool
    {
        return $this->cleanedString === strrev($this->cleanedString);
    }
}
