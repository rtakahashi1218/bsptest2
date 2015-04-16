<?php
require_once 'PHPUnit/Framework.php';
require_once './Calc.php';

class CalcTest extends PHPUnit_Framework_TestCase
{
    public function testAdd()
    {   
        $calc = new Calc;
        $this->assertEquals(3, $calc->add(1, 1));
    }   
}
