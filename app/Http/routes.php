<?php

use App\Http\Middleware\CheckAdminLogin;


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'View\HomeController@toHome');
Route::get('/news', 'View\NewsController@toNews');
Route::get('/aboutus', 'View\AboutusController@toAboutus');
Route::get('/main_business', 'View\MainBusinessController@toMainBusiness');
Route::get('/contactus', 'View\ContactusController@toContactus');


Route::get('/news/detail/{id}', 'View\NewsController@toDetail');

Route::group(['prefix' => 'service'], function () {
    Route::post('upload/{type}', 'Service\UploadController@uploadFile');
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('login', 'Admin\IndexController@toLogin');
    Route::get('exit', 'Admin\IndexController@toExit');
    Route::post('/service/login', 'Admin\IndexController@login');

    Route::group(['middleware' => 'check.admin.login'], function () {
        Route::group(['prefix' => 'service'], function () {
            Route::post('home/edit', 'Admin\HomeController@homeEdit');
            Route::post('main_business/add', 'Admin\MainBusinessController@mainbusinessAdd');
            Route::post('mainbusiness/del', 'Admin\MainBusinessController@mainbusinessDel');
            Route::post('news/edit', 'Admin\NewsController@newsEdit');
            Route::post('news/del', 'Admin\NewsController@newsDel');
            Route::post('news/add', 'Admin\NewsController@newsAdd');
            Route::post('aboutus/edit', 'Admin\AboutusController@aboutusEdit');
            Route::post('contactus/edit', 'Admin\ContactusController@contactusEdit');
        });


        Route::get('index', 'Admin\IndexController@toIndex');

        Route::get('home', 'Admin\HomeController@toHomeInfo');
        Route::get('home_edit', 'Admin\HomeController@toHomeEdit');
        Route::get('home_secondpage', 'Admin\HomeController@toSecondPage');
        Route::get('home_thirdpage', 'Admin\HomeController@toThirdPage');

        Route::get('main_business', 'Admin\MainBusinessController@toMainBusiness');
        Route::get('main_business_add', 'Admin\MainBusinessController@toMainBusinessAdd');
        Route::get('mainbusiness_page/{id}', 'Admin\MainBusinessController@toMainBusinessPage');


        Route::get('news', 'Admin\NewsController@toNews');
        Route::get('news_content/{id}', 'Admin\NewsController@toNewsContent');
        Route::get('news_edit/{id}', 'Admin\NewsController@toNewsEdit');
        Route::get('news_add', 'Admin\NewsController@toNewsAdd');

        Route::get('aboutus', 'Admin\AboutusController@toAboutus');
        Route::get('aboutus_edit', 'Admin\AboutusController@toAboutusEdit');

        Route::get('contactus', 'Admin\ContactusController@toContactus');
        Route::get('contactus_edit', 'Admin\ContactusController@toContactusEdit');
    });
});