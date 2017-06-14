<?php namespace Domain\Patterns\Behavioural\CoR;

/**
 * Class AdvanceHandler
 * @package Domain\Patterns\Behavioural\CoR
 */
abstract class AdvancedHandler
{

  /**
   * @param $request
   * @return mixed
   */
  final public function handle($request)
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
  final public function handleRequestWithChain($request)
  {
      $response = $this->process($request);
      if (($response === null) && ($this->successor !== null)) {
          $response = $this->successor->handleRequestWithChain($request);
      }
      $this->cache->setResponse($response);

      return $response;
  }
}
