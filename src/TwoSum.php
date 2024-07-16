<?php

/**
 * Two Sum
 * Given an array of integers `nums` and an integer target, return indices of the
 * two numbers such that they add up to `target`.
 * 
 * You may assume that each input would have exactly one solution, and you may not
 * use the same element twice.
 */

class TwoSum
{
    public function twoSum(array $nums, int $target)
    {
        $data = array();
        for($i = 0; $i < count($nums); $i++) {
            $current = $nums[$i];
            $complement = $target - $current;
            if (array_key_exists($complement, $data)) {
                return array($data[$complement], $i);
            }
            $data[$current] = $i;
        }
        return array();
    }

}
