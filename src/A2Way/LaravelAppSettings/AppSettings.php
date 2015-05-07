<?php

namespace A2Way\LaravelAppSettings ;

class AppSettings
{

	public static function get ( $key )
	{
		try
		{
			return Models\AppSetting::setting ( $key ) -> firstOrFail () -> value ;
		} catch ( \Illuminate\Database\Eloquent\ModelNotFoundException $ex )
		{
			return NULL ;
		}
	}

	public static function set ( $key , $value )
	{
		$appSetting ;
		try
		{
			$appSetting = Models\AppSetting::where ( 'key' , '=' , $key ) -> firstOrFail () ;
		} catch ( \Illuminate\Database\Eloquent\ModelNotFoundException $ex )
		{
			$appSetting			 = new Models\AppSetting() ;
			$appSetting -> key	 = $key ;
		}

		$appSetting -> value = $value ;
		return $appSetting -> save () ;
	}

}
