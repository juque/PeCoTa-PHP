<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/functions.php';

class FunctionsTest extends TestCase
{
    public function testReverseString()
    {
        $expected = "atimE";
        $actual = reverseString("Emita");
        $this->assertEquals($expected, $actual, 'They are not the same');
    }

    public function testReverseStringUsingWhile()
    {
        $expected = "atimE";
        $actual = reverseStringUsingWhile("Emita");
        $this->assertEquals($expected, $actual, 'They are not the same');
    }

    public function testReverseStringUsingFor()
    {
        $expected = "atimE";
        $actual = reverseStringUsingFor("Emita");
        $this->assertEquals($expected, $actual, 'They are not the same');
    }


    public function testReverseArray()
    {
        $expected = ['a', 'm', 'e'];
        $actual = reverseArrayUsingFor(['e', 'm', 'a']);
        $this->assertEquals($expected, $actual, 'They are not the same');

        $actual = reverseArrayUsingWhile(['e', 'm', 'a']);
        $this->assertEquals($expected, $actual, 'They are not the same');
    }

    public function testIsPalindrome()
    {
        $actual = isPalindrome("rayar");
        $this->assertTrue($actual);
    }

    public function testIsNotPalindrome()
    {
        $actual = isPalindrome("anas");
        $this->assertFalse($actual);
    }

    public function testSanitizeName() 
    {
        $expected = "Captura-de-pantaa-2024-08-01-a-las-13.10.01.png";
        $actual = sanitizeName("Captura de pantaña 2024-08-01 a la(s) 13.10.01.png");
        $this->assertEquals($expected, $actual, 'They are no the same');
    }

}
