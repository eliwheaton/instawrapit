<?php

class Home_Controller extends Base_Controller {

	/*
	|--------------------------------------------------------------------------
	| The Default Controller
	|--------------------------------------------------------------------------
	|
	| Instead of using RESTful routes and anonymous functions, you might wish
	| to use controllers to organize your application API. You'll love them.
	|
	| This controller responds to URIs beginning with "home", and it also
	| serves as the default controller for the application, meaning it
	| handles requests to the root of the application.
	|
	| You can respond to GET requests to "/home/profile" like so:
	|
	|		public function action_profile()
	|		{
	|			return "This is your profile!";
	|		}
	|
	| Any extra segments are passed to the method as parameters:
	|
	|		public function action_profile($id)
	|		{
	|			return "This is the profile for user {$id}.";
	|		}
	|
	*/

	public function action_index()
	{
		return View::make('home.index');
	}


    // Delete all methods below before going live
	public function action_flush()
	{
		Session::flush();
		return Redirect::to('home');
	}

    public function action_fakelogin()
    {
        Session::put('oauth2-access-token-instagram', 'true');
        Session::put('(id', '1');
        Session::put('username', 'reallylongusername');
        Session::put('full_name', 'Full Name');
        Session::put('profile_picture', 'http://www.experiencefarm.com/wp-content/uploads/2011/01/instagramIcon.png');

        return Redirect::to('home');
    }

}
