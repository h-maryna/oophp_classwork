<?php

namespace App;

use \App\Framework\Router;
use \App\Framework\View;
use \App\Framework\Model;
class App
{
	public function __construct()
	{   
        //var_dump('APP INSTANTIATED');

		$this->initRouter();

		$this->initView();
		
		$this->initModels();
	}

	private function initView()
	{
        $view_path = __DIR__ . '/Views';
        View::init($view_path);
	}
    /**
     * Initialized the router
     * @return VOID
     */
	public function initRouter()
	{
		Router::init();
		require __DIR__ . '/../routes.php';
		Router::showRoutes();
	}
    /**
     * Initialized Models
     * @return VOID
     */
		public function initModels()
	{
		global $dbh;
		Model::init($dbh);

	}

	public function run()
	{
		Router::dispatch();
	}


}