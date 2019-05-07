<?php

namespace App\Controllers;

use App\Framework\Controller;
use App\Framework\View;

class PageController extends Controller
{   

	
	public static function home(){
		$data['title'] = 'Welcome to our Website!';
		$data['content'] = '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>';
	    View::show('default', $data);
	}

	public static function about(){
		$data['title'] = 'About us!';
	    View::show('default', $data);
	}

	public static function shop(){
		$data['title'] = 'Shop our clothes!';
	    View::show('default', $data);
	}

	public static function contact(){
		$data['title'] = 'Contact us!';
	    View::show('contact', $data);
	}

	public static function contact_send(){
		var_dump($_POST);
	}
}