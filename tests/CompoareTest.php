<?php
class CompareTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    function 空文字と0は等しい()
    {
        $val_a = '';
        $val_b = 0;
        $this->assertTrue($val_a == $val_b);
    }

    /**
     * @test
     */
    function 空文字と0は厳密には等しくない()
    {
        $val_a = '';
        $val_b = 0;
        $this->assertFalse($val_a === $val_b);
    }

    /**
     * @test
     */
    function 文字列0と空文字は等しくない()
    {
        $val_a = '0';
        $val_b = '';
        $this->assertFalse($val_a == $val_b);
    }
}