<?php

namespace A2Way\LaravelAppSettings ;

class LaravelAppSettingsServiceProvider extends \Illuminate\Support\ServiceProvider
{

	public function register ()
	{
		$this -> registerPublishes () ;
	}

	private function registerPublishes ()
	{
		$this -> publishes ( [__DIR__ . '/../database/migrations' => $this -> app -> databasePath () . '/migrations' ] ) ;
	}

}
