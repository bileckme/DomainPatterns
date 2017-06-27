<?php namespace Domain\Patterns\Tests\Behavioural\Mediator;

use Domain\Patterns\Behavioural\Mediator\Mediator;
use Domain\Patterns\Behavioural\Mediator\Subsystem\Client;
use Domain\Patterns\Behavioural\Mediator\Subsystem\Database;
use Domain\Patterns\Behavioural\Mediator\Subsystem\Server;
use Domain\Patterns\Tests\Test;

/**
 * Class MediatorTest
 * @package Domain\Patterns\Tests\Behavioural\Mediator
 */
class MediatorTest extends Test
{

    /**
     * Tests output to be 'Hello World'
     */
    public function testOutputHelloWorld()
    {
        $client = new Client();
        new Mediator(new Database(), $client, new Server());

        $this->expectOutputString('Hello World');
        $client->request();
    }
}