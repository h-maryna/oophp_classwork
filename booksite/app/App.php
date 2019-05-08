<?php

namespace App;

use \App\Framework\RegexRouter as Router;
use \App\Framework\View;
use \App\Framework\Model;
class App
{   
	/**
	 * Inversion of control cintainer
	 * @var Pimple Container
	 */
	
	private $c;

	public function __construct(\Pimple\Container $c)
	{   
        $this->c = $c;

		$this->initRouter();

		$this->initView();
		
		$this->initModels();
	}

	private function initView()
	{
        
        View::init($this->c['view_path']);
	}
    /**
     * Initialized the router
     * @return VOID
     */
	public function initRouter()
	{
		Router::init();
		require $this->c['routes_file'];
	}
    /**
     * Initialized Models
     * @return VOID
     */
		public function initModels()
	{
		Model::init($this->c['dbh']);

	}

	public function run()
	{
		Router::dispatch();
	}


}