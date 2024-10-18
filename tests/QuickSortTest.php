<?php

use PHPUnit\Framework\TestCase;

class QuickSortTest extends TestCase {

    private QuickSort $quickSort;

    protected function setUp(): void
    {
        $this->quickSort = new QuickSort();
    }

    public function testEmptyArray(): void
    {
        $this->assertEquals([], $this->quickSort->quickSort([]));
    }

    public function testSingleElementArray(): void
    {
        $this->assertEquals([1], $this->quickSort->quickSort([1]));
    }

    public function testAlreadySortedArray(): void
    {
        $this->assertEquals([1, 2, 3, 4, 5], $this->quickSort->quickSort([1, 2, 3, 4, 5]));
    }

    public function testReverseOrderArray(): void
    {
        $this->assertEquals([1, 2, 3, 4, 5], $this->quickSort->quickSort([5, 4, 3, 2, 1]));
    }

    public function testArrayWithDuplicates(): void
    {
        $this->assertEquals([1, 2, 2, 3, 4, 5, 5], $this->quickSort->quickSort([5, 2, 4, 2, 1, 5, 3]));
    }

    public function testArrayWithNegativeNumbers(): void
    {
        $this->assertEquals([-5, -3, 0, 2, 4], $this->quickSort->quickSort([0, 2, -5, 4, -3]));
    }

    public function testLargeRandomArray(): void
    {
        $randomArray = array_map(fn() => rand(-1000, 1000), range(1, 1000));
        $sortedArray = $this->quickSort->quickSort($randomArray);
        
        $this->assertTrue($this->isSorted($sortedArray));
    }

    private function isSorted(array $array): bool
    {
        $length = count($array);
        for ($i = 1; $i < $length; $i++) {
            if ($array[$i] < $array[$i - 1]) {
                return false;
            }
        }
        return true;
    }
}
