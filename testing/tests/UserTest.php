<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase {
/*     public function testReturnsFullname() {
        $user = new User();

        $user->first_name = "Jon";
        $user->surname = "Green";

        $this->assertEquals("Jon Green", $user->getFullName());
    }

    public function testNotificationSent() {
        $user = new User("dave@yahoo.com"); 

        $mock_mailer = $this->createMock(Mailer::class); 

        $mock_mailer->expects($this->once())->method('sendMessage')->with($this->equalTo("dave@yahoo.com"), $this->equalTo("hello"))->willReturn(true);

        $user->setMailer($mock_mailer);

        $this->assertTrue($user->notify("hello"));
    } */

    public function testCannotNotifyUserWithNoEmail() {
        $user = new User(); 
        
        $mock_mailer = $this->createMock(Mailer::class); 
        
        $mock_mailer->method('sendMessage')->will($this->throwException(new Exception()));
    
        $user->setMailer($mock_mailer);

        $this->expectException(Exception::class);

        $user->notify("Hello", '');
    }
}

