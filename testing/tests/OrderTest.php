<?php
use PHPUnit\Framework\TestCase;


class OrderTest extends TestCase {
    public function testOrderIsProcessing() {
        $gateway = $this->getMockBuilder('PaymentGateway')->addMethods(['charge'])->getMock();

        $gateway->method('charge')->with($this->equalTo(200))->willReturn(true);

        $order = new Order($gateway);

        $order->amount = 200;

        $this->assertTrue($order->process());
    } 
}