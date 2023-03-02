<?php

class ExampleMockery extends Mockery\Adapter\Phpunit\MockeryTestCase  {

   //one way of integrating mockery but instead we can just extend MockeryTestCase

    public function testOrderIsProcessingUsingMockery() {
        $gateway = Mockery::mock('PaymentGateway');

        $gateway->shouldReceive('charge')->once()->with(200)->andReturn(true);

        $order = new Order($gateway);
        
        $order->amount = 200;
        
        $this->assertTrue($order->process());

    }



}