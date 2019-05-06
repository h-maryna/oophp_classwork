<?php

namespace classes;

interface ModelInterface
{
	public function all();

	public function find($key);

	public function save();

	public function update();

	public function delete();
}
