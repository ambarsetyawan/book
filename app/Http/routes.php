<?php
/*********************************************************************************************************
 * Locale Route
 ********************************************************************************************************/
Route::get('locale/{lang}', ['as' => 'locale.select', 'uses' => 'LocaleController@setLocale']);


/*********************************************************************************************************
 * Auth Routes
 ********************************************************************************************************/
Route::controllers([
    'auth' => 'AuthController',
    'password' => 'PasswordController',
]);

/*********************************************************************************************************
 * User Profile
 ********************************************************************************************************/

/*********************************************************************************************************
 * Books
 ********************************************************************************************************/
Route::resource('book', 'BooksController');

/*********************************************************************************************************
 * Favorites
 ********************************************************************************************************/
/*********************************************************************************************************
 * Comments
 ********************************************************************************************************/
/*********************************************************************************************************
 * Rating
 ********************************************************************************************************/
/*********************************************************************************************************
 * Categories
 ********************************************************************************************************/
/*********************************************************************************************************
 *
 ********************************************************************************************************/

/*********************************************************************************************************
 * Dashboard
 ********************************************************************************************************/
Route::get('/', 'HomeController@index');

Route::get('home', 'HomeController@index');

/*********************************************************************************************************
 * Admin Routes
 ********************************************************************************************************/
Route::group(['prefix' => 'admin', 'before' => ['']], function () {

    Route::get('/', 'Admin\HomeController@index');

});