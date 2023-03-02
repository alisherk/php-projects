<?php

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Depends;

class QueueTest extends TestCase {
    protected static $queue;

    //run before each test
    protected function setUp(): void {
        static::$queue->clear();
    }

    protected function tearDown(): void {
        //unset($this->queue);
    }

    //run before the first test of the class is run
    /**
     * @beforeClass
     */
    public static function setUpBeforeClass(): void {
        static::$queue = new Queue();
    }

    //run after the last test of the class is run
    public static function tearDownAfterClass(): void {
        static::$queue = null;
        //we can close do any sockets and db connections in this class
    }

    public function testNewQueueIsEmpty() {
        $this->assertEquals(0, static::$queue->getCount());
    }

    public function testItemIsAddedToTheQueue() {
        static::$queue->push('green');

        $this->assertEquals(1, static::$queue->getCount());

        return static::$queue;
    }
    #[Depends('testItemIsAddedToTheQueue')]
    public function testItemIsRemovedFromTheQueue(Queue $queue) {
        $queue->push('green');

        $item = $queue->pop();

        $this->assertEquals(0, $queue->getCount());

        $this->assertEquals('green', $item);
    }

    public function testItemIsRemovedFromTheFront() {
        static::$queue->push(1);
        static::$queue->push(2);

        $this->assertEquals(1, static::$queue->pop());

    }

    public function testMaxNumberOfItemsCanBeAdded() {
        for ($i = 0; $i < Queue::MAX_ITEMS; $i++) {
            static::$queue->push($i);
        }
        $this->assertEquals(Queue::MAX_ITEMS, static::$queue->getCount());

        return static::$queue;
    }


    public function testExceptionThrown() {
        for ($i = 0; $i < Queue::MAX_ITEMS; $i++) {
            static::$queue->push($i);
        }
        $this->expectException(QueueException::class);

        static::$queue->push(6);
    }

}
