<?php

namespace classes\Models;

use classes\ModelAll;
use classes\ModelFind;
use classes\ModelSave;
use classes\ModelUpdate;
use classes\ModelDelete;

class Author2 implements ModelAll, ModelSave, ModelDelete, ModelUpdate, ModelFind
{
	public function all()
	{
        var_dump('AUTHOR All');
	}

	public function find($key)
	{

	}

	public function save()
	{

	}

	public function update()
	{

	}

	public function delete($key)
	{

	}
}