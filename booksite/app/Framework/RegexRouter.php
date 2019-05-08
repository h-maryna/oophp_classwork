<?php 

namespace App\Framework;

class RegexRouter // static classes they can be used by other classes
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

    protected static $getRoutes = [];

    protected static $postRoutes = [];

    public static function init()
    {   
    	static::setRawRequest();
    	static::setCleanRequest();
    	//var_dump('ROUTER INITILIZED');
    	//var_dump(static::$raw_request);
    	//var_dump(static::$clean_request);
    	//var_dump($getRoutes);
    	//var_dump($postRoutes);

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

    public static function get(string $route, Callable $callback)
    {
    	//$route = trim($route, '/ ');

        static::$getRoutes[$route] = $callback;
    }

    public static function post(string $route, Callable $callback)
    {
    	//$route = trim($route, '/ ');
        static::$postRoutes[$route] = $callback;
    }

    public static function showRoutes()
    {
        //var_dump(static::$getRoutes);
    	//var_dump(static::$postRoutes);
    }

    /* Dispatch functionlaity -- eventually should be removed to its own class
    -------------------------------------------------------------------------*/

    public static function dispatch()
    {
        if('GET' == $_SERVER['REQUEST_METHOD']){
        	$request = static::$clean_request;
        	$routes = static::$getRoutes;
            if(empty($request)) $request = 'home';
            // Each $key is a regular expression
            // Each $func is the callable assigned to it
            foreach ($routes as $key => $func) {
                if(preg_match($key, $request, $matches)){
                    // remove string match from $matches
                    array_shift($matches); 
                    call_user_func_array($func, $matches);
                }
              }

        }

        if('POST' == $_SERVER['REQUEST_METHOD']){
            $request = static::$clean_request;
        	$routes = static::$postRoutes;
            if(empty($request)) $request = 'home';
            if(array_key_exists($request, $routes))
            {
               call_user_func($routes[$request]);
            }
        }
    }

}