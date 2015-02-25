<?php namespace Knutsford\Pages;

abstract class Page {

	/**
	 * Title meta tag for the page
	 *
	 * @return string
	 */
	public function title() 
	{
		return $this->title;
	}

	/**
	 * Description meta tag for the page
	 *
	 * @return string
	 */
	public function description() 
	{
		return $this->description;
	}

}