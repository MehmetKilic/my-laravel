<?php

/*
|--------------------------------------------------------------------------
| Application & Route Filters
|--------------------------------------------------------------------------
|
| Below you will find the "before" and "after" events for the application
| which may be used to do any work before or after a request into your
| application. Here you may also register your custom route filters.
|
*/

App::before(function($request)
{
    //
});


App::after(function($request, $response)
{
    //
});

/*
|--------------------------------------------------------------------------
| Authentication Filters
|--------------------------------------------------------------------------
|
| The following filters are used to verify that the user of the current
| session is logged into this application. The "basic" filter easily
| integrates HTTP Basic authentication for quick, simple checking.
|
*/

// Admin Auth Filtresi
Route::filter('auth', function()
{
    if (Auth::admin()->guest()) return View::make('admin.layouts.login');
});

// Kullanıcı Auth Filtresi
Route::filter('members', function()
{
    if (Auth::members()->guest()) return View::make('index.layouts.login');
});

App::missing(function($exception) {
    Log::error($exception);
    return Response::make("Sayfa bulunamadı!", 404);
});

// Dil seçim isteklerini işliyoruz
App::before(function($request)
{
    if ( in_array(Request::segment(1), Config::get('app.languages')) ) {
        Session::put('locale', Request::segment(1));
        return Redirect::to(substr(Request::path(), 3));

    }
    if ( Session::has('locale') ) {
        App::setLocale(Session::get('locale'));
    }
});

/*
|--------------------------------------------------------------------------
| Guest Filter
|--------------------------------------------------------------------------
|
| The "guest" filter is the counterpart of the authentication filters as
| it simply checks that the current user is not logged in. A redirect
| response will be issued if they are, which you may freely change.
|
*/

Route::filter('guest', function()
{
    if (Auth::check()) return Redirect::to('/');
});

/*
|--------------------------------------------------------------------------
| CSRF Protection Filter
|--------------------------------------------------------------------------
|
| The CSRF filter is responsible for protecting your application against
| cross-site request forgery attacks. If this special token in a user
| session does not match the one given in this request, we'll bail.
|
*/

Route::filter('csrf', function()
{
    if (Session::token() != Input::get('_token'))
    {
        throw new Illuminate\Session\TokenMismatchException;
    }
});