<?php

Route::get('/', array( 'as' => 'index', function()
{
	return View::make('public');
}));


/*Route::group(array('prefix' => 'auth'), function()
{
    Route::get('login', function()
    {
        return 'Vous devez vous connecter !';
    });
    Route::get('logout', function()
    {
        return 'Vous devez vous connecter !';
    });
});*/
Route::controller('auth', 'AuthController',
    array(
        'getLogin'              => 'auth.get.login',
        'getInscription'        => 'auth.get.inscription',
        'postLogin'             => 'auth.post.login',
        'postInscription'       => 'auth.post.inscription',
        'getLogout'             => 'auth.get.logout'
    )
);

Route::resource('news', 'NewsController');


//TODO a effacer
Route::get('up', function() {
   return View::make('_image-dialog');
});
Route::post('up', 'CustomController@imageUpload');

App::missing(function($exception)
{
    return Response::view('errors.missing', array(), 404);
});

//This will redirect all missing routes to AngularJS Framework .
App::missing(function($exception)
{
    return View::make('news');
});
// permet de charger les vues depuis angular
Route::get('/views/{name}', function($name) {

    if (View::exists($name)) {
        return View::make($name);
    }
   return View::make('errors.missing');
});