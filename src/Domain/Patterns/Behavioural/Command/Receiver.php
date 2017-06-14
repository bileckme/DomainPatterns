<?php namespace Domain\Patterns\Behavioural\Command;

/**
 * Class Receiver
 * @package Domain\Patterns\Behavioural\Command
 */
class Receiver
{
  /**
   * @var bool
   */
  private $enableDate = false;

  /**
   * @var string[]
   */
  private $output = [];

  /**
   * @param string $str
   */
  public function write($str)
  {
    if ($this->enableDate) {
      $str .= ' ['.date('Y-m-d').']';
    }

    $this->output[] = $str;
  }

  /**
   * Get the output
   * @return string
   */
  public function getOutput()
  {
    return join("\n", $this->output);
  }

  /**
   * Enable receiver to display message date
   */
  public function enableDate()
  {
    $this->enableDate = true;
  }

  /**
   * Disable receiver to display message date
   */
  public function disableDate()
  {
    $this->enableDate = false;
  }
}