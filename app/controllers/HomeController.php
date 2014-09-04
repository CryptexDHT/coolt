<?php


function getColor () {
	$randomcolor = '#' . strtoupper(dechex(rand(0,10000000)));
	return $randomcolor;
}


class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showFront()	{




		return View::make('front');
	}



	public function getLinks()	{
		$links = DB::table('links')->get();

		return Response::json(

			$links

		);

	}

	public function getNews()	{



		return View::make('Catalog');
	}


	public function getCatalog()	{



		return View::make('Catalog');
	}





	public function getThread()	{



		return View::make('Catalog');
	}





	public function postComment() {



		return View::make('Catalog');
	}





}
