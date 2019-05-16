<?php
class Palindrome
{
    public static function isPalindrome($word)
    {
        $word = strtolower($word);
        $length = strlen($word);
        
        for($i = 0; $i < $length; $i++)
        {
            if ($word[$i] != $word[$length - 1 - $i])
            {
                return false;
            }
        }
        
        return true;
    }
}

echo Palindrome::isPalindrome('Deleveled');
