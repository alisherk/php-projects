<?php

use PHPUnit\Framework\TestCase;

class MockTest extends TestCase {
    public function testMock() {
        $mock = $this->createMock(Mailer::class);
        //stabs can change what it returns like so 
        $mock->method('sendMessage')->willReturn(true);

        $result = $mock->sendMessage("dave@yahoo.com", "hellp");

        $this->assertTrue($result);
    }
}