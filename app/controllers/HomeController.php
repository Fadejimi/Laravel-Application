<?php

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

	public function showWelcome()
	{
        /*
		Schema::create('art', function($newTable){
			$newTable -> increments('id');
			$newTable -> string('artist');
			$newTable -> string('title', 500);
			$newTable -> text('description');
			$newTable -> date('created');
			$newTable -> date('exhibition_date');
			$newTable -> timestamps();
		});


		Schema::table('art', function($newColumn){
			$newColumn -> boolean('alumni');
			$newColumn -> dropColumn('exhibition_date');
		});
        */
        
        Schema::create('sculpture', function($newTable){
            $newTable -> increments('id');
            $newTable -> string('name', 500);
            $newTable -> string('artist');
            $newTable -> int('year', 4);
            $newTable -> timestamps();
        });

		$theLandmarks = array("St. Marks", "Broklyn Heights", "Times Square", "Julius Berger");
		return View::make('hello', array('theLocation' => 'Ibadan', 'theWeather' => 'stormy',
			'theLandmarks' => $theLandmarks));
	}

}
