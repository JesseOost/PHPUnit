<?php

require_once __DIR__ . "/../../src/Calculator.php";

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    /**
     * @covers Calculator::CalculateAddition
     */
    public function TestCalculateAddition(){
        $calculator = new Calculator();
        $result1 = $calculator->add(20,5);
        $result2 = $calculator->add(3,41);
        $result3 = $calculator->add(4392, 1203);
        $result4 = $calculator->add(310,354);

        $this->assertSame(25, $result1);
        $this->assertSame(44, $result2);
        $this->assertSame(5595, $result3);
        $this->assertSame(664, $result4);
    }

    /**
     * @covers Calculator::CalculateSubtraction
     */
    public function TestCalculateSubtraction(){
        $calculator = new Calculator();
        $result1 = $calculator->subtract(20,5);
        $result2 = $calculator->subtract(3,41);
        $result3 = $calculator->subtract(4392, 1203);
        $result4 = $calculator->subtract(310,354);

        $this->assertSame(15, $result1);
        $this->assertSame(-38, $result2);
        $this->assertSame(3189, $result3);
        $this->assertSame(-44, $result4);
    }
}
