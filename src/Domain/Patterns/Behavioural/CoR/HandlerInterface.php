<?php namespace Domain\Patterns\Behavioural\CoR;

/**
 * Interface HandlerInterface
 * @package Domain\Patterns\Behavioural\CoR
 */
interface HandlerInterface
{
    /**
   * @param BaseHandler $handler
   * @return mixed
   */
  public function setSuccessor(BaseHandler $handler);

  /**
   * @param $request
   * @return mixed
   */
  public function handle($request);
}
