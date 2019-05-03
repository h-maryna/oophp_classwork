<?php

namespace App;

use \App\Framework\Model;

class App
{
	public function __construct()
	{
		var_dump('APP INSTANTIATED');
		$this->initModels();
	}

	public function initModels()
	{
		global $dbh;
		Model::init($dbh);
		var_dump('MODEL INITIATED');

	}
}