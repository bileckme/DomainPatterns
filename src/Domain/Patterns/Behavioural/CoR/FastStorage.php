<?php namespace Domain\Patterns\Behavioural\CoR;

use Domain\Patterns\Behavioural\CoR\RequestInterface as Request;

/**
 * Class FastStorage
 * @package Domain\Patterns\Behavioural\CoR
 */
class FastStorage extends Handler
{

  /**
   * @var Handler
   */
  protected $data;

    /**
     * FastStorage constructor.
     * @param Handler $data
     */
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
