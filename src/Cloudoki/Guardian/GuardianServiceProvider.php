<?php namespace Cloudoki\Guardian;

use Illuminate\Support\ServiceProvider;

class GuardianServiceProvider extends ServiceProvider {

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
		#Oauth2 Migrations
		$this->publishes(
		[
			__DIR__.'/../../migrations/' => database_path ('migrations')
		], 'migrations');
	}
	
	
	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['guardian'] = $this->app->share(function($app)
        {
            return new Guardian;
        });
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return ['guardian'];
	}

}
