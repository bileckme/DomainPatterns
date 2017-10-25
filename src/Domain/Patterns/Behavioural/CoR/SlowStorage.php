<?php namespace Domain\Patterns\Behavioural\CoR;

use Domain\Patterns\Behavioural\CoR\RequestInterface as Request;

/**
 * Class SlowStorage
 * @package Domain\Patterns\Behavioural\CoR
 */
class SlowStorage extends Handler
{
    /**
   * @var
   */
  protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

  /**
   * Processes the request.
   * This is the only method a child can implements,
   * with the constraint to return null to dispatch the request to next successor.
   *
   * @param $request
   * @return null|mixed
   */
  protected function process(Request $request)
  {
      // TODO: Implement process() method.
  }
}
