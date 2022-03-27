<?php

use PHPUnit\Framework\TestCase;
class factorialTest extends TestCase{



    public function test_factorial_of_zero(){
        $f = new factorial(); 
        $this->assertEquals(1,$f->calc_factorial(0), "factorial of 0 should return 1");

    }
    public function test_factorial_of_one()
    {
        $f = new factorial();
        $this->assertEquals(1, $f->calc_factorial(1), "factorial of 1 should return 1");
    }
    public function test_factorial_of_five()
    {
        $f = new factorial();
        $this->assertEquals(120, $f->calc_factorial(5), "factorial of 5 should return 120");
    }
    public function test_factorial_of_Random()
    {
        $f = new factorial();
        $random = 9;
        $value = 9 * 8 * 7 * 6 * 5 * 4 * 3 * 2 *1;
        self::assertEquals($value, $f->calc_factorial($random), "Factorial $random should return $value");
    }
    public function test_factorial_of_negative_three()
    {
        $f = new factorial();
        $this->assertEquals(null, $f->calc_factorial(-3), "factorial of -3 should return null");
    }
    public function test_factorial_of_one_point_five()
    {
        $f = new factorial();
        $this->assertEquals(null, $f->calc_factorial(1.5), "factorial of 1.5 should return null");
    }
    public function test_factorial_of_false()
    {
        $f = new factorial();
        $this->assertEquals(null, $f->calc_factorial(false), "factorial of false should return null");
    }
    public function test_factorial_of_string()
    {
        $f = new factorial();
        $this->assertEquals(null, $f->calc_factorial("abc"), "factorial of string should return null");
    }

}

?>