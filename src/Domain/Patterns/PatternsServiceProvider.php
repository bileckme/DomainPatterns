<?php namespace Domain\Patterns;

use Domain\Patterns\Behavioural\Strategy\BaseOutput;
use Illuminate\Support\ServiceProvider;

class PatternsServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

  /**
   * Bootstrap the application events.
   *
   * @return void
   */
  public function boot()
  {
      $this->package('domain/patterns');
  }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerStrategyPattern();
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['patterns'];
    }

  /**
   * Registers the Strategy Pattern
   */
  protected function registerStrategyPattern()
  {
      $this->app->bind('Domain\Patterns\Behavioural\Strategy\OutputInterface', BaseOutput::class);
  }
}
