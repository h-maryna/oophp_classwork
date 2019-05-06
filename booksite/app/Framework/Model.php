<?php

namespace App\Framework;

class Model
{
	protected static $dbh;

	public static function init(\PDO $dbh)
	{
		static::$dbh = $dbh;
	}
    
    // Dbh is a class
    // PDO is inrerface
    // \PDO go back to PDO
	public function __construct(\PDO $dbh) // dependancy injection
	{    
		$this ->dbh = $dbh; 
        //$this->dbh = new \PDO(DB_DSN, DB_USER, DB_PASS); 
	}

	public function all()
	{
		$query = 'SELECT * FROM ' . $this->table;
		$stmt = $this->dbh->query($query);
		return $stmt->fetchAll(\PDO::FETCH_ASSOC);
	}

	public function find($key)
	{
		$query = "SELECT * FROM {$this->table} WHERE {$this->key} = :key";
		$stmt = $this->dbh->prepare($query);
		$params = array(
		          ':key' =>$key);
		$stmt->execute($params);
		return $stmt->fetch(\PDO::FETCH_ASSOC);
	}
}