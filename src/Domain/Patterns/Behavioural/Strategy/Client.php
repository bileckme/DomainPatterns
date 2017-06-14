<?php namespace Domain\Patterns\Behavioural\Strategy;

use Domain\Patterns\Behavioural\Strategy\OutputInterface;

/**
 * Class Client
 * @package Domain\Patterns\Tests\Behavioural\Strategy
 */
class Client
{
    private $output;

  /**
   * @param OutputInterface $outputType
   */
  public function setOutput(OutputInterface $outputType)
  {
      $this->output = $outputType;
  }

  /**
   * @return mixed
   */
  public function loadOutput()
  {
      return $this->output->load();
  }
}
