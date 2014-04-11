<?php
class IssetTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    function 変数がNULLだとissetはfalseです()
    {
        $value = null;
        $this->assertFalse(isset($value));
    }
}