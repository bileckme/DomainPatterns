<?php namespace Domain\Patterns\Structural\Facade;

/**
 * Interface OsInterface
 * @package Domain\Patterns\Structural\Facade
 */
interface OsInterface
{

  /**
   * Halt
   * @return mixed
   */
  public function halt();

  /**
   * Get the name
   * @return string
   */
  public function getName();
}
