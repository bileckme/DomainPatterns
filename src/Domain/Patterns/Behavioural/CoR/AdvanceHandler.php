<?php namespace Domain\Patterns\Behavioural\CoR;

use Domain\Patterns\Behavioural\CoR\RequestInterface as Request;

/**
 * Class AdvanceHandler
 * @package Domain\Patterns\Behavioural\CoR
 */
abstract class AdvanceHandler
{
    /**
   * @var
   */
  protected $cache;

  /**
   * @param $request
   * @return mixed
   */
  final public function handle(Request $request)
  {
      $response = $this->cache->getResponse($request);
      if ($response === null) {
          $response = $this->handleRequestWithChain($request);
      }

      return $response;
  }

  /**
   * @param $request
   * @return mixed
   */
  final public function handleRequestWithChain(Request $request)
  {
      $response = $this->process($request);
      if (($response === null) && ($this->successor !== null)) {
          $response = $this->successor->handleRequestWithChain($request);
      }
      $this->cache->setResponse($response);

      return $response;
  }
}
