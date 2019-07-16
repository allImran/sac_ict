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

// Route::get('/history', function () {
//     return 'got it';
// })->name('history');
Route::get('laravel-send-email', 'EmailController@sendEMail');
Route::get('/','FrontController@index')->name('home.front');

Route::get('/history','FrontController@history')->name('history');
Route::get('/mission','FrontController@mission')->name('mission');
Route::get('/values','FrontController@values')->name('values');
Route::get('/board','FrontController@board')->name('board');

Route::get('/contact','ContactController@index')->name('contact');
Route::get('/products','ProductController@index')->name('product.all');
Route::get('/album/{id}','ProductController@album')->name('album.single');
Route::get('/advartise','AdvartiseController@index')->name('advartise.all');

//Cart
Route::get('/cartDetail', 'ProductController@cartDetail')->name('cart.Detail');
Route::get('/cartCheckout', 'ProductController@cartCheckout')->name('cart.Checkout')->middleware('auth');
Route::get('/download_as_zip/{id}', 'ProductController@downloadZip')->name('cart.download');

//payment
Route::post('/Payment', 'PaymentController@first')->name('payment.first');
Route::post('/Payment/bkash/store', 'PaymentController@store')->name('bkash.payment.store');



//Choir
Route::get('/choir','ChoirController@index')->name('choir');
Route::get('/choir-volunteer','ChoirController@volunteer')->name('choir-volunteer');
Route::get('/choir-events','ChoirController@events')->name('choir-events');
Route::get('/choir-testimony','ChoirController@testimony')->name('choir-testimony');

//SOW
Route::get('/sow','SowController@index')->name('sow');
Route::get('/wme-course','SowController@wme')->name('wme');
Route::get('/impact-story/bangladesh','SowController@imp_bn')->name('imp_bn');
Route::get('/impact-story/india','SowController@imp_in')->name('imp_in');

//Arts
Route::get('/live-drama','ArtsController@index')->name('live_drama');
Route::get('/ttc','ArtsController@ttc')->name('ttc');
Route::get('/case','ArtsController@case')->name('case');

//Volenteer
Route::get('/volunteer', 'VolController@index')->name('volunteer');
Route::post('/volunteer/sing-up', 'VolController@signup')->name('volunteer.singup');
// Route::group(['prefix'=>'home'],function(){
// 	Route::get('/','FrontController@index')->name('home');
// });

//LFU
Route::get('/LFU-blanket', 'LFUController@blanket')->name('blanket');
Route::get('/LFU-flood', 'LFUController@flood')->name('flood');
Route::get('/LFU-children-activities', 'LFUController@child')->name('child');

//Impact Nation
Route::get('/Impact-Nation/NPWC', 'ImpactController@npwc')->name('npwc');
Route::get('/Impact-Nation/RT', 'ImpactController@rt')->name('rt');
Route::get('/Impact-Nation/GCEC', 'ImpactController@gcec')->name('gcec');
Route::get('/Impact-Nation/SOL', 'ImpactController@sol')->name('sol');

//Frontend Donation related route
Route::get('/donation','DonationController@index')->name('donation.create');
Route::post('/donation/method','DonationController@method')->name('donation.method');
Route::post('/donation/bkash/store','DonationController@bkash')->name('bkash.store');


Auth::routes();
Route::get('/home', 'Dashboard\dashboardController@index')->name('home')->middleware('auth');

//user access control
Route::prefix('s_admin')->middleware('auth','Check_super_admin')->group(function () {
	Route::get('/user/all', 'Dashboard\UserAccessController@index')->name('user.all');
	Route::get('/user/access/view/{id}', 'Dashboard\UserAccessController@access')->name('user.access.view');

	Route::get('/user/access/set_role/{id}/{role_id}', 'Dashboard\UserAccessController@set_role')->name('make.author');
	Route::get('/user/access/seize_role/{id}/{role_id}', 'Dashboard\UserAccessController@seize_role')->name('suspend.author');
});

//custom login
Route::post('/login/custom', 'LoginController@login')->name('login.custom');

//Dashboard Route
Route::prefix('dashboard')->middleware('auth')->group(function () {
    Route::get('/', 'Dashboard\dashboardController@index')->name('admin.dashboard');
});

//slider Route
Route::prefix('dashboard/slider')->middleware('auth')->group(function () {
    Route::get('/create', 'Dashboard\sliderController@create')->name('slider.create');
    Route::post('/store', 'Dashboard\sliderController@store')->name('slider.store');
    Route::get('/manage', 'Dashboard\sliderController@index')->name('slider.index');
    Route::get('/edit/{id}', 'Dashboard\sliderController@edit')->name('slider.edit');
    Route::post('/update/{id}', 'Dashboard\sliderController@update')->name('slider.update');
    Route::get('/delete/{id}', 'Dashboard\sliderController@delete')->name('slider.delete');
});

//Gallery Route
Route::prefix('dashboard')->middleware('auth')->group(function () {
	Route::resource('/gallery', 'Dashboard\GalleryController');
});

//Upcoming Event//
Route::prefix('dashboard')->middleware('auth')->group(function () {
	Route::resource('/event/upcoming', 'Dashboard\UpcomingEventController');
	Route::resource('/event/image', 'Dashboard\UcEventImageController');
	Route::get('/event/image/{id}/form', 'Dashboard\UcEventImageController@create')->name('event.image.create');
});

//Dashboard Choir//
Route::prefix('dashboard')->middleware('auth')->group(function () {
	Route::get('/choir-vdo/create', 'Dashboard\ChoirController@video_create')->name('choir.video.create');
	Route::post('/choir-vdo/update', 'Dashboard\ChoirController@video_update')->name('choir.video.update');

	//choir member
	Route::resource('/choir/team_member', 'Dashboard\ChoirMemberController');
});

//Dashboard Volunteer Handling Route//
Route::prefix('dashboard')->middleware('auth')->group(function () {
	Route::get('/volunteer/active', 'Dashboard\VolunteerHandlingController@active')->name('volunteer.active');
	Route::get('/volunteer/inactive', 'Dashboard\VolunteerHandlingController@inactive')->name('volunteer.inactive');
	Route::get('/volunteer/index', 'Dashboard\VolunteerHandlingController@index')->name('volunteer.index');
	Route::get('/volunteer/accept/{id}', 'Dashboard\VolunteerHandlingController@accept')->name('volunteer.accept');
	Route::get('/volunteer/deny/{id}', 'Dashboard\VolunteerHandlingController@deny')->name('volunteer.deny');
});


//bkash route//
Route::prefix('dashboard')->middleware('auth')->group(function () {
	Route::get('/bkash/index', 'Dashboard\payment\BkashController@index')->name('bkash.index');
	Route::get('/bkash/delete/{id}', 'Dashboard\payment\BkashController@delete')->name('bkash.delete');
	Route::get('/bkash/approve/{id}', 'Dashboard\payment\BkashController@approve')->name('bkash.approve');
	Route::get('/bkash/reject/{id}', 'Dashboard\payment\BkashController@reject')->name('bkash.reject');
});

//Products Route
Route::prefix('dashboard/products')->middleware('auth')->group(function () {
	Route::get('/create', 'Dashboard\ProductsController@create')->name( 'album.create');
	Route::post('/store', 'Dashboard\ProductsController@store')->name( 'album.store');
	Route::get('/manage', 'Dashboard\ProductsController@index')->name( 'album.index');
	Route::get('/edit/{id}', 'Dashboard\ProductsController@edit')->name('album.edit');
	Route::post('/update/{id}', 'Dashboard\ProductsController@update')->name('album.update');
	Route::get('/delete/{id}', 'Dashboard\ProductsController@delete')->name('album.delete');

	//Songs

	Route::get('/create-song', 'Dashboard\SongController@create')->name('song.create');
	Route::post('/store-song', 'Dashboard\SongController@store')->name('song.store');
});

//Authorization Failed page
Route::get('/auth/failed', 'Dashboard\dashboardController@auth_failed')->name('user.auth.failed');

Route::get('/cookie', 'LoginController@cookie')->name('cookie');

Route::get('send', 'MailController@send');



