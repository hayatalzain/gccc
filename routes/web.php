<?php

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
//
//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/admin', function () {
//    return view('admin');
//});
Route::group(array('middleware' => ['auth']), function () {

    Route::group(array('middleware' => ['admin']), function () {
        Route::get('register', 'RegisterUserController@showRegistrationForm')->name('register');
        Route::post('register', 'RegisterUserController@create');
        Route::get("/showUsers","RegisterUserController@show")->name('show');
    });

    Route::get("/admin","AdminController@admin")->name('admin');
    Route::get("/slider","SliderController@index")->name('slider');
    Route::get("/sponsors","SponsorsController@index")->name('sponsors');
    Route::get("/cardthree","CardThreeController@index")->name('cardthree');
    Route::get("/features","FeaturesController@index")->name('features');
    Route::get("/conference","ConferenceController@index")->name('conference');
    Route::get("/setting","SettingController@index")->name('setting');



   Route::group(array('middleware' => ['CheckAge']), function () {});


    Route::group(array('middleware' => ['editor']), function () {
        /*slider*/
        Route:: patch("slider.{id}","SliderController@update")->name('slider.update');
        Route:: get("slider.edit.new","SliderController@edit")->name('slider.edit.new');
        Route::get("slider.delete","SliderController@destroy")->name('slider.destroy.new');

        /*sponsors*/
        Route:: patch("sponsors.{id}","SponsorsController@update")->name('sponsors.update');
        Route:: get("sponsors.edit.new","SponsorsController@edit")->name('sponsors.edit.new');
        Route::get("sponsors.delete","SponsorsController@destroy")->name('sponsors.destroy.new');

        /*card_three*/
        Route:: patch("cardthree.{id}","CardThreeController@update")->name('cardthree.update');
        Route:: get("cardthree.edit.new","CardThreeController@edit")->name('cardthree.edit.new');
        Route::get("cardthree.delete","CardThreeController@destroy")->name('cardthree.destroy.new');

        /*features_slide*/
        Route:: patch("features.{id}","FeaturesController@update")->name('features.update');
        Route:: get("features.edit.new","FeaturesController@edit")->name('features.edit.new');
        Route::get("features.delete","FeaturesController@destroy")->name('features.destroy.new');

        /*table_conference*/
        Route:: patch("conference.{id}","ConferenceController@update")->name('conference.update');
        Route:: get("conference.edit.new","ConferenceController@edit")->name('conference.edit.new');
        Route::get("conference.delete","ConferenceController@destroy")->name('conference.destroy.new');

        /*setting*/
        Route:: patch("setting.{id}","SettingController@update")->name('setting.update');
        Route:: get("setting.edit.new","SettingController@edit")->name('setting.edit.new');
        Route::get("setting.delete","SettingController@destroy")->name('setting.destroy.new');
    });

    Route::group(array('middleware' => ['creator']), function () {
        /*slider*/
        Route::post("/slider","SliderController@create")->name('slider.create');
        /*sponsors*/
        Route::post("/sponsors","SponsorsController@create")->name('sponsors.create');
        /*card_three*/

        Route::post("/cardthree","CardThreeController@create")->name('cardthree.create');

        /*features_slide*/
        Route::post("/features","FeaturesController@create")->name('features.create');

        /*table_conference*/
        Route::post("/conference","ConferenceController@create")->name('conference.create');

        /*setting*/
        Route::post("/setting","SettingController@create")->name('setting.create');
    });

});


/*Admin page*/

/*email*/
Route::get("/email","EmailController@index")->name('email');
Route::get("email.delete","EmailController@destroy")->name('email.destroy.new');


Auth::routes(['register' => false]);

//
Route::get("logout","Auth\LoginController@logout")->name('home.logout');
/*home page --frontend--*/

Route::get('about',"HomeController@about")->name('about');
Route::get('directory',"HomeController@directory")->name('directory');
Route::get('home',"HomeController@home")->name('home');
Route::post('home',"HomeController@email")->name('email.send');
