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
