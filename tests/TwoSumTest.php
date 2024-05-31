<?php

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class TwoSumTest extends TestCase
{
    #[DataProvider('twoSumProvider')]
    public function testTwoSum(array $nums, int $target, array $expected)
    {
        $solution = new TwoSum();
        $actual = $solution->twoSum($nums, $target);
        $this->assertEquals($expected, $actual);
    }

    public static function twoSumProvider(): array
    {
        return [
            'example 1' => [[2, 7, 11, 15], 9, [0, 1]],
            'example 2' => [[3, 2, 4], 6, [1, 2]],
            'example 3' => [[3, 3], 6, [0, 1]],
            'no solution' => [[1, 2, 3], 7, []],
            'negative numbers' => [[-3, 4, 3, 90], 0, [0, 2]],
        ];
    }

}
