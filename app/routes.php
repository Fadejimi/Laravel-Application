<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
/*
Route::get('/', array(
	'before' => array('newyear','valentines','halloween','birthdate:10/23'),
	'after' => 'logvisits',
	function()
{
	return View::make('hello');
}));

Route::get('about', function(){
	return 'ABOUT content';
});*/

Route::get('/', array('before' => 'newyear', 'uses' =>'HomeController@showWelcome'));
Route::get('/about', 'AboutController@showAbout');
Route::get('about/directions', array('uses' => 'AboutController@showDirections',
    'as' => 'directions'));
Route::get('/about/{theSubject}', 'AboutController@showSubject');

Route::any('submit-form', function(){
	return 'Process-form';
});
/*
Route::get('about/{the_subject}', function($the_subject){
	return $the_subject.' content goes here';
});
*/
Route::get('about/classes/{the_subject}', function($the_subject){
	return "content on $the_subject goes here";
});
/*
Route::get('about/directions', array('as' => 'directions', function(){
	$theUrl = URL::route('directions');
	return "DIRECTIONS go to this url: $theUrl";
}));
*/
Route::get('/content/{the_subject}/{the_verb}', function($the_subject, $the_verb){
	return "content on $the_verb which is on the $the_subject goes here";
});

Route::get('where', function(){
	return Redirect::Route('directions');
});

Route::get('vote', array(
	'before' => 'age:15',
	function(){
		return 'Vote';
	}
));

Route::get('programs', function(){
	return View::make('programs');
});

Route::get('graphic-designs', function(){
	return View::make('graphic-designs');
});

Route::get('signup', function(){
	return View::make('signup');
});

Route::post('thanks', function(){
	$theEmail = Input::get('email');
	return View::make('thanks')->with('theEmail', $theEmail);
});