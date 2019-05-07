<?php 

namespace App\Framework;

class Router // static classes they can be used by other classes
{
    /**
     * Raw request received by Apache,
     *  and available in $_SERVER
     * @var [type]
     */
    protected static $raw_request;

    /**
     * Clean request after we've trimmed
     * it and neatned it up
     * @var [type]
     */
    protected static $clean_request;

    public static function init()
    {   
    	static::setRawRequest();
    	static::setCleanRequest();
    	var_dump('ROUTER INITILIZED');
    	var_dump(static::$raw_request);
    	var_dump(static::$clean_request);

    }

    private static function setRawRequest()
    {
    	static::$raw_request = filter_input(INPUT_SERVER, 'REQUEST_URI'); // or $_SERVER['REQUEST_URI']; 
    }

    private static function setCleanRequest()
    {
    	// remove index.php
    	// remove ?
    	// remove trailing/
    	$request = static::$raw_request;
    	$request = str_replace('index.php', '', $request);
    	$request = str_replace('?', '', $request);
    	$request = trim($request, '/');
    	static::$clean_request = $request;
    }

}