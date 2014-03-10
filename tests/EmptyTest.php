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
    
    function testFalseという文字列はEmptyじゃない()
    {
        $value = 'False';
        $this->assertFalse(empty($value));
    }
}