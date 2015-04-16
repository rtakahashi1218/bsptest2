<?php
require_once 'PHPUnit/Framework.php';
require_once './Calc.php';

class CalcTest extends PHPUnit_Framework_TestCase
{
    public function testAdd()
    {   
        $calc = new Calc;
        $this->assertEquals(2, $calc->add(1, 1));
    }
    public function testSubtraction()
    {   
        $calc = new Calc;
        $this->assertEquals(2, $calc->subtraction(4, 2));
    }   
}
