<?php

use PHPUnit\Framework\TestCase; 

class AssertTrue extends TestCase {
    public function testTrueIsTrue() {
        
        $value = true;
        
        $this->assertTrue($value);
    }
}
