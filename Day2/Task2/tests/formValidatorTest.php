<?php

use PHPUnit\Framework\TestCase;
require "./src/formValidator.php";

class formValidatorTest extends TestCase{


    public function test_valid_Email()
    {
        //parameters msg - email - name 
        $this->assertTrue(getError("dina is testing the code","Dina@gmail.com","Dina"));
    }
    public function test_valid_msg_length()
    {
        //parameters msg - email - name 
        $this->assertTrue(getError("dina is testing the code", "Dina@gmail.com", "Dina"));
    }


}