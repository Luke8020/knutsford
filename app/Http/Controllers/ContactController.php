<?php namespace App\Http\Controllers;

use Input, URL, Flash, Redirect;

use Knutsford\Pages\Contact;
use App\Http\Requests\ContactFormRequest;
use App\Services\Mailers\ContactFormMailer;

class HomeController extends PageController {

	/**
	 * Show the contact page
	 * @Get("/consultation")
	 *
	 * @return Response
	 */
	public function index(Contact $homePage) 
	{
		$this->page($homePage);
		return view('knutsford.contact.index');
	}

	/**
	 * Display the contact page
	 * @Post("/")
	 *
	 * @return Response
	 */
	public function contact(ContactFormRequest $request, ContactFormMailer $mailer) 
	{
		$input = Input::all();
		$message = $mailer->sendEmail($input);

		Flash::success($message);

		$contactPath = URL::previous() . '#brn-contact';
		return Redirect::to( $contactPath );
	}
}
