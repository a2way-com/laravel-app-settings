<?php

namespace A2Way\LaravelAppSettings\Models ;

class AppSetting extends \Illuminate\Database\Eloquent\Model
{

	public function scopeSetting ( $q , $key )
	{
		return $q -> where ( 'key' , '=' , $key ) ;
	}

}
