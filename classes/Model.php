<?php

namespace classes\Models;

class Model
{
	protected $dbh;

	// Inversion of Cpntrol: Design Patterb
	// DEpendancy Injection: tactique, control
    
    // Dbh is a class
    // PDO is inrerface
    // \PDO go back to PDO
    
    /**
     * This demonstrates Inversion of Control
     * Instesd of having the calss know how to
     * create its own database connection, we 
     * pass in a connection of whatever type we like
     * Our datbase must meet the specif of the 
     * PDO Interface
     * @param \PDO $dbh [description]
     */
    
	public function __construct(\PDO $dbh) // dependancy injection
	{    
		$this ->dbh = $dbh; 
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