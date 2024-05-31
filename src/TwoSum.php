<?php

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
