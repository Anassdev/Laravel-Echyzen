<?php

Route::get('/', array( 'as' => 'index', function()
{
    $data = array( 'name' => 'Henry');
    Mail::send('mail.layout', $data, function($m)
    {
        $m->from('guillaume.unice@gmail.com', 'Guillaume');

        $m->to('guillaume.unice@gmail.com', 'henry')->subject('Welcome to My Laravel app!');

    });
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

