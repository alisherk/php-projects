<?php
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase {
    public function testIdIsInt() {
        $prod = new Product(); 

        $reflector = new ReflectionClass(Product::class);

        $property = $reflector->getProperty('product_id');

        $property->setAccessible(true);

        $val = $property->getValue($prod);

        $this->assertIsInt($val);
    }
}