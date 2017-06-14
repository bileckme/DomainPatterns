<?php namespace Domain\Patterns\Structural\Facade;

/**
 * Interface BiosInterface
 * @package Domain\Patterns\Structural\Facade
 */
interface BiosInterface
{

  /**
   * Execute
   * @return mixed
   */
  public function execute();

  /**
   * Wait for key press
   * @return mixed
   */
  public function waitForKeyPress();

  /**
   * @param OsInterface $os
   * @return mixed
   */
  public function launch(OsInterface $os);

  /**
   * Power down
   * @return mixed
   */
  public function powerDown();
}