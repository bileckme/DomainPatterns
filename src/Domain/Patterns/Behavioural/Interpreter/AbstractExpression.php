<?php namespace Domain\Patterns\Behavioural\Interpreter;

/**
 * Class AbstractExpression
 * @package Domain\Patterns\Behavioural\Interpreter
 */
abstract class AbstractExpression
{
  /**
   * @var Client
   */
  public $client;

  /**
   * Interpret an expression in context
   * @param Context $context
   * @return mixed
   */
  abstract public function interpret(Context $context);
}