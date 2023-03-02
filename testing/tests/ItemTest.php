<?php
use PHPUnit\Framework\TestCase;

class ItemTest extends TestCase {
    public function testDescIsNotEmpty() {
        $item = new Item(); 

        $this->assertNotEmpty($item->getDescription());
    }

    //two ways to test 
    //1 - inherit Item class with a subclass call ItemChild 
    //2 - using reflection
    public function testIdAndInt() {
        $item = new ItemChild(); 

        $this->assertIsInt($item->getID());
    }

     //2 - using reflection to test private method getToken
    public function testTokenAsAString() {
        $item = new Item(); 

        $reflector = new ReflectionClass(Item::class); 

        $method = $reflector->getMethod('getToken');

        $method->setAccessible(true);

        $result = $method->invoke($item);

        $this->assertIsString($result);
    }

    public function testPrefixedTokenStartsWithPrefix() {
        $item = new Item(); 

        $reflector = new ReflectionClass(Item::class); 

        $method = $reflector->getMethod('getPrefixedToken');

        $method->setAccessible(true);

        $result = $method->invokeArgs($item, ['example']);

        $this->assertStringStartsWith('example', $result);
    }
}