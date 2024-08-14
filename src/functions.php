<?php

function reverseString(string $input)
{
    return strrev($input);
}

function reverseStringUsingFor(string $input)
{

    $length = strlen($input);
    $reversed = '';
    for ($i = $length - 1; $i >= 0; $i--) {
        $reversed .= $input[$i];
    }
    return $reversed;
}

function reverseStringUsingWhile(string $input)
{
    $length = strlen($input);
    $reversed = '';
    $i = $length - 1;
    while ($i >= 0) {
        $reversed .= $input[$i];
        $i--;
    }
    return $reversed;
}

function reverseArrayUsingFor(array $input)
{
    $length = count($input);
    $reversed = [];
    for ($i = $length - 1; $i >= 0; $i--) {
        $reversed[] = $input[$i];
    }
    return $reversed;
}

function reverseArrayUsingWhile(array $input)
{
    $length = count($input);
    $reversed = [];
    $i = $length - 1;
    while ($i >= 0) {
        $reversed[] = $input[$i];
        $i--;
    }
    return $reversed;
}


function isPalindrome($str)
{

    $str = preg_replace("/[^a-z0-9]/i", '', $str);
    $str = strtolower($str);

    if (strlen($str) === 0) {
        return true;
    }

    $left = 0;
    $right = strlen($str) - 1;

    while ($left < $right) {
        if ($str[$left] !== $str[$right]) {
            return false;
        }
        $left++;
        $right--;
    }

    return true;
}

function sanitizeName($str) {
  $str = preg_replace('/\s+/', '-', $str);
  $str = preg_replace("/[^a-z0-9\-\.]/i", '', $str);
  return $str;
}
