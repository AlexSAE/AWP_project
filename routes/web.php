<?php



Route::get('/', function () {

    return view('layouts.default');

});


Auth::routes();


      
      Route::get('/home', 'HomeController@index');

      Route::resource('/users', 'UsersController');

      Route::resource('/posts', 'PostController');

      Route::get('/profile', 'ProfileController@index');


      Route::get('/Profile/{slug}', 'ProfileController@index');

      Route::post('/uploadPhoto', 'PortfolioController@uploadPhoto');


      //edit
      Route::get('/editProfile', 'PortfolioController@editProfileForm');



      Route::get('/changePhoto', function() {

          return view('profile.pic');
      });



        // Route::get('/posts', function() {
      		
        //    return view('pages.posts');
        // });






      Route::get('/about', function() {

          return view('pages.about');
      });

      Route::get('/portfolio', function() {

          return view('pages.portfolio');
      });

      Route::post('/contact', 'UsersController@contactUser');

      Route::get('/employers', 'UsersController@getEmployers');

      Route::get('/translators', 'UsersController@getTranslators');

      Route::get('/translators/{lang}', 'UsersController@findTranslatorsFor');

      Route::get('about', function() {

          return view('pages.about');
      });








/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('register', 'Auth\RegisterController@create');

Route::get('portfolio', function() {

    return view('pages.portfolio');
});


