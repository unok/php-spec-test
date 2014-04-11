<?php
class EmptyTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    function 空文字はEmptyです()
    {
        $value = '';
        $this->assertTrue(empty($value));
    }

    /**
     * @test
     */
    function NULLはEmptyです()
    {
        $value = null;
        $this->assertTrue(empty($value));
    }

    /**
     * @test
     */
    function 数値0はEmptyです()
    {
        $value = 0;
        $this->assertTrue(empty($value));
    }

    /**
     * @test
     */
    function 偽はEmpty()
    {
        $value = false;
        $this->assertTrue(empty($value));
    }

    /**
     * @test
     */
    function 文字列0はEmptyです()
    {
        $value = '0';
        $this->assertTrue(empty($value));
    }

    /**
     * @test
     */
    function Falseという文字列はEmptyではない()
    {
        $value = 'False';
        $this->assertFalse(empty($value));
    }

    /**
     * @test
     */
    function 存在しない添字の配列に使えるかつEmptyです()
    {
        $value = array();
        $this->assertTrue(empty($value['uso800']));
    }

    /**
     * @test
     */
    function 連想配列で値がnullの場合はEmptyです()
    {
        $value = array('uso800' => null);
        $this->assertTrue(empty($value['uso800']));
    }

    /**
     * @test
     */
    function 連想配列で値がfalseの場合はEmptyです()
    {
        $value = array('uso800' => false);
        $this->assertTrue(empty($value['uso800']));
    }
    
    function test連想配列で値がtrueの場合はEmptyではない()
    {
        $value = array('uso800' => true);
        $this->assertFalse(empty($value['uso800']));
    }
}