<?php
/**
 * Created by PhpStorm.
 * User: biyi
 * Date: 2017/06/14
 * Time: 3:02 PM
 */
namespace Domain\Patterns\Behavioural\CoR;

use Domain\Patterns\Behavioural\CoR\RequestInterface as Request;

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
