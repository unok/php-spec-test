<?php
class EmptyTest extends PHPUnit_Framework_TestCase
{
    function test空文字はEmptyです()
    {
        $value = '';
        $this->assertTrue(empty($value));
    }
    
    function testNULLはEmptyです()
    {
        $value = null;
        $this->assertTrue(empty($value));
    }
    
    function test0はEmptyです()
    {
        $value = 0;
        $this->assertTrue(empty($value));
    }
    
    function test偽はEmpty()
    {
        $value = false;
        $this->assertTrue(empty($value));
    }
    
    function test0という文字列はEmptyです()
    {
        $value = '0';
        $this->assertTrue(empty($value));
    }
    
    function testFalseという文字列はEmptyではない()
    {
        $value = 'False';
        $this->assertFalse(empty($value));
    }
    
    function test存在しない添字の配列に使えるかつEmptyです()
    {
        $value = array();
        $this->assertTrue(empty($value['uso800']));
    }
    
    function test連想配列で値がnullの場合はEmptyです()
    {
        $value = array('uso800' => null);
        $this->assertTrue(empty($value['uso800']));
    }
    
    function test連想配列で値がfalseの場合はEmptyです()
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