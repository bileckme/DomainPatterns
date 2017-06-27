<?php namespace Domain\Patterns\Behavioural\Mediator;

/**
 * Class Mediator
 * @package Domain\Patterns\Behavioural\Mediator
 */
class Mediator implements MediatorInterface
{
    /**
     * @var Subsystem\Server
     */
    protected $server;

    /**
     * @var Subsystem\Database
     */
    protected $database;

    /**
     * @var Subsystem\Client
     */
    protected $client;

    /**
     * Mediator constructor.
     * @param $server
     * @param $database
     * @param $client
     */
    public function __construct(Subsystem\Server $server, Subsystem\Database $database, Subsystem\Client $client)
    {
        $this->server = $server;
        $this->database = $database;
        $this->client = $client;

        $this->database->setMediator($this);
        $this->server->setMediator($this);
        $this->client->setMediator($this);
    }



    /**
     * @param $content
     * @return mixed
     */
    public function sendResponse($content)
    {
        $this->client->output($content);
    }

    /**
     * @return mixed
     */
    public function makeRequest()
    {
        $this->server->process();
    }

    /**
     * @return mixed
     */
    public function queryDb()
    {
        return $this->database->getData();
    }
}