<?php
class CompareTest extends PHPUnit_Framework_TestCase
{
    function test空文字と0は等しい()
    {
        $val_a = '';
        $val_b = 0;
        $this->assertTrue($val_a == $val_b);
    }
    
    function test空文字と0は厳密には等しくない()
    {
        $val_a = '';
        $val_b = 0;
        $this->assertFalse($val_a === $val_b);
    }
    
    function test0という文字列と空文字は等しくない()
    {
        $val_a = '0';
        $val_b = '';
        $this->assertFalse($val_a == $val_b);
    }
}