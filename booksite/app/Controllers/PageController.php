<?php

namespace App\Controllers;

use App\Framework\Controller;
use App\Framework\View;

class PageController extends Controller
{   
    
    public static function show($page)
    {
        var_dump($page);
        die;
    }

	public static function contact(){
		$data['title'] = 'Contact us!';
	    View::show('contact', $data);
	}

	public static function contact_send(){
		var_dump($_POST);
	}
}