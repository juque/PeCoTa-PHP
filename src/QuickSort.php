<?php

/**
 * QuickSort
 * Is a sorting algorithm based on the Divide and Conquer that picks an
 * element as a pivot and partitions the given array around the picked pivot by
 * placing the pivot in its correct position in the sorted array.
 */

class QuickSort
{
    public function quickSort(array $array): array
    {

        if (count($array) < 2) {
            return $array;
        }

        // first element
        $pivot = $array[0];

        $less = [];
        $greater = [];

        // from second element
        for($i = 1; $i < count($array); $i++) {

            if ($array[$i] <= $pivot) {
                $less[] = $array[$i];
            } else {
                $greater[] = $array[$i];
            }
        }

        return array_merge($this->quickSort($less), [$pivot], $this->quickSort($greater));
    }

}
