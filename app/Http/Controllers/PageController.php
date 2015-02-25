<?php namespace App\Http\Controllers;

use View;
use Knutsford\Pages\Page;

class PageController extends Controller {

	/**
	 * Title meta tag for the page
	 *
	 * @var string
	 */
	public $title;

	/**
	 * Description meta tag for the page
	 *
	 * @var string
	 */
	public $description;

	public function __construct() 
	{
		$this->beforeFilter('csrf', ['on' => ['post', 'put']]);
		View::share(['title' => $this->title, 'description' => $this->description]);
	}

	public function page(Page $page) 
	{
		$this->title = $page->title();
		$this->description = $page->description();
	}
}