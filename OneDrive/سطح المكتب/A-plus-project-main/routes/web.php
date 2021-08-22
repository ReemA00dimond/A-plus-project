<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home-content');
});

Route::get('/login-user', function () {
    return view('login-content');
	
});

Route::get('/create-account', function () {
    return view('creat-account-content');
});

Route::get('/logged-in', function () {
    return view('logged-content');
});

Route::get('/about-our-platform', function () {
    return view('about-content');
});

Route::get('/our-policy', function () {
    return view('policy-content');
});

Route::get('/our-privacy', function () {
    return view('privacy-content');
});

Route::get('/contact-to-us', function () {
    return view('contact-content');
});

Route::get('/user-account', function () {
    return view('u-account-cont');
});

Route::get('/user-questions', function () {
    return view('u-que-content');
});

Route::get('/user-contents', function () {
    return view('u-cont-content');
});

Route::get('/user-volunteer', function () {
    return view('volunteer-content');
});
Route::get('/add-content', function () {
    return view('add-content-cont');
});

Route::get('/content-added', function () {
    return view('q-notify-cont');
});

Route::get('/s-reult', function () {
    return view('searchresult-cont');
});

// end of pages routes
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');

	Route::get('typography', function () {
		return view('pages.typography');
	})->name('typography');

	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');

	Route::get('map', function () {
		return view('pages.map');
	})->name('map');

	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');

	Route::get('rtl-support', function () {
		return view('pages.language');
	})->name('language');

	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

