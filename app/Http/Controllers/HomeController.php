<?php namespace App\Http\Controllers;

use Input, URL, Flash, Redirect;

use Knutsford\Pages\Home;

class HomeController extends PageController {

	/**
	 * Show the home page
	 * @Get("/")
	 *
	 * @return Response
	 */
	public function index(Home $homePage) 
	{
		$this->page($homePage);
		return view('knutsford.home.index');
	}
}
