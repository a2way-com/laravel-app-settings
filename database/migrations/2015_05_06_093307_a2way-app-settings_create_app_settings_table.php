<?php

use Illuminate\Database\Schema\Blueprint ;
use Illuminate\Database\Migrations\Migration ;

class A2wayAppSettingsCreateAppSettingsTable extends Migration
{

	public function up ()
	{
		Schema::create ( 'app_settings' , function(Blueprint $t)
		{
			$t -> increments ( 'id' ) ;
			$t -> string ( 'key' ) ;
			$t -> string ( 'value' ) ;
			$t -> timestamps () ;
		} ) ;
	}

	public function down ()
	{
		Schema::dropIfExists ( 'app_settings' ) ;
	}

}
