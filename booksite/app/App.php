<?php

namespace App;

use \App\Framework\Router;
use \App\Framework\Model;

class App
{
	public function __construct()
	{   
        var_dump('APP INSTANTIATED');

		$this->initRouter();

		
		$this->initModels();
	}
    /**
     * Initialized the router
     * @return VOID
     */
	public function initRouter()
	{
		Router::init();
	}
    /**
     * Initialized Models
     * @return VOID
     */
		public function initModels()
	{
		global $dbh;
		Model::init($dbh);
		var_dump('MODEL INITIATED');

	}


}