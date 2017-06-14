<?php namespace Domain\Patterns\Behavioural\CoR;

/**
 * Class BaseHandler
 * @package Domain\Patterns\Behavioural\CoR
 */
abstract class BaseHandler
{
    /**
   * @var Handler
   */
  private $successor = null;

  /**
   * Sets a successor handler,
   * in case the class is not able to satisfy the request.
   *
   * @param Handler $handler
   */
  public function setSuccessor(Handler $handler)
  {
      if ($this->succesor === null) {
          $this->successor = $handler;
      } else {
          $this->successor->setSuccessor($handler);
      }
  }

  /**
   * Handles the request or redirect the request
   * to the successor, if the process response is null.
   *
   * @param string|array $request
   * @return string
   */
  final public function handle($request)
  {
      $response = $this->process($request);
      if (($response === null) && ($this->successor !== null)) {
          $response = $this->successor->handle($request);
      }

      return $response;
  }

  /**
   * Processes the request.
   * This is the only method a child can implements,
   * with the constraint to return null to dispatch the request to next successor.
   *
   * @param $request
   * @return null|mixed
   */
  abstract protected function process($request);
}
