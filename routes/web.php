<?php

use Illuminate\Support\Facades\Route;
use App\Models\Static_Content;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\CommonController;
use App\Http\Controllers\QuestionnaireController;
use App\Http\Controllers\LearningOutcomeController;
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

Route::get('learningoutcome_calculation',[LearningOutcomeController::class,'LearningOutComeProcessData']);


Route::get('/upload-csv-files', function () {
    return view('welcome');
});
Route::resource('upload',UploadController::class);
Route::get('genrate_key',[UploadController::class,'genrate_key']);
Route::get('view_parti_g3_school',[CommonController::class,'view_parti_g3_school']);
Route::get('questionnaire_calculation',[QuestionnaireController::class,'questionnaireCalculation']);
Route::get('generateAt3SetForLanguage',[QuestionnaireController::class,'generateAt3SetForLanguage']);

Route::get('home', 'App\Http\Controllers\MainController@landing');
Route::post('post-search', 'App\Http\Controllers\MainController@search')->name('post-search');
Route::post('preloaddata', 'App\Http\Controllers\MainController@preload')->name('preloaddata');


//Admin routes
Route::get('secure-admin', 'App\Http\Controllers\AdminController@index')->name('secure-admin');
Route::post('login-post', 'App\Http\Controllers\AdminController@login');
Route::get('logout', 'App\Http\Controllers\AdminController@logout');
Route::get('register', 'App\Http\Controllers\AdminController@register');


Route::get('dashboard', 'App\Http\Controllers\AdminController@dashboard')->name('dashboard');


//Event Routes

Route::get('/events','App\Http\Controllers\EventController@index')->name('events');


Route::post('/add/event', 'App\Http\Controllers\EventController@store')->name('store-event');
Route::get('/edit/event/{id}', 'App\Http\Controllers\EventController@edit');
Route::post('/update/event/{id}', 'App\Http\Controllers\EventController@update');


//Event Images & vediosRoutes

Route::get('/event/images/{id}','App\Http\Controllers\EventController@getImages')->name('getImages');
Route::post('/add/images/{id}', 'App\Http\Controllers\EventController@addImages');
Route::get('/delete/image/{image}/{id}', 'App\Http\Controllers\EventController@deleteImage');
Route::get('/vedios','App\Http\Controllers\EventController@vedios')->name('vedios');
Route::post('/add/vedio', 'App\Http\Controllers\EventController@addVedio');
Route::get('/delete/vedio/{id}', 'App\Http\Controllers\EventController@deleteVedio');

//Profile
Route::get('/profile','App\Http\Controllers\AdminController@profile');
Route::post('/update/profile','App\Http\Controllers\AdminController@updateProfile');

//Team Routes
Route::get('/team-manager','App\Http\Controllers\TeamController@index')->name('team');
Route::post('/add/member','App\Http\Controllers\TeamController@store')->name('create-member');
Route::get('/edit/member/{id}','App\Http\Controllers\TeamController@edit')->name('edit-member');
Route::post('/update/member/{id}','App\Http\Controllers\TeamController@update')->name('update-member');
Route::get('/delete/member/{image}/{id}','App\Http\Controllers\TeamController@destroy');

//Static content Routes
Route::get('/static-content','App\Http\Controllers\StaticContentController@index')->name('content');
Route::get('/add/content','App\Http\Controllers\StaticContentController@add')->name('add-content');
Route::post('/store/content','App\Http\Controllers\StaticContentController@store')->name('store-content');
Route::get('/edit/content/{id}','App\Http\Controllers\StaticContentController@edit')->name('edit-content');
Route::get('/delete/content/{id}','App\Http\Controllers\StaticContentController@destroy');
Route::post('/update/content/{id}','App\Http\Controllers\StaticContentController@update')->name('update-content');


//Master Routes

//District Routes
Route::get('/district','App\Http\Controllers\MasterController@district')->name('district');
Route::get('/add/district','App\Http\Controllers\MasterController@addDistrict')->name('add-district');
Route::post('/store/district','App\Http\Controllers\MasterController@storeDistrict')->name('store-district');
Route::get('/edit/district/{id}','App\Http\Controllers\MasterController@editDistrict')->name('edit-district');
Route::get('/delete/district/{id}','App\Http\Controllers\MasterController@destroyDistrict');
Route::post('/update/district/{id}','App\Http\Controllers\MasterController@updateDistrict')->name('update-district');

//State Routes
Route::get('/state','App\Http\Controllers\MasterController@state')->name('state');
Route::get('/add/state','App\Http\Controllers\MasterController@addState')->name('add-state');
Route::post('/store/state','App\Http\Controllers\MasterController@storeState')->name('store-state');
Route::get('/edit/state/{id}','App\Http\Controllers\MasterController@editState')->name('edit-state');
Route::get('/delete/state/{id}','App\Http\Controllers\MasterController@destroyState');
Route::post('/update/state/{id}','App\Http\Controllers\MasterController@updateState')->name('update-state');


// End Master Routes


//National Routes
Route::get('/national-statistic','App\Http\Controllers\NationalController@index')->name('national');
Route::get('/add/national','App\Http\Controllers\NationalController@add')->name('add-national');
Route::post('/store/national','App\Http\Controllers\NationalController@store')->name('store-national');
Route::get('/edit/national/{id}','App\Http\Controllers\NationalController@edit')->name('edit-national');
Route::get('/delete/national/{id}','App\Http\Controllers\NationalController@destroy');
Route::post('/update/national/{id}','App\Http\Controllers\NationalController@update')->name('update-national');

//Banner Routes
Route::get('/manage-banner','App\Http\Controllers\BannerController@index')->name('manage-banner');
Route::post('/store/banner','App\Http\Controllers\BannerController@store')->name('store-banner');
Route::get('/edit/banner/{id}','App\Http\Controllers\BannerController@edit')->name('edit-banner');
Route::get('/delete/banner/{image}/{id}','App\Http\Controllers\BannerController@destroy');
Route::post('/update/banner/{id}','App\Http\Controllers\BannerController@update')->name('update-banner');

//Client Logo Routes
Route::get('/client-logo','App\Http\Controllers\ClientLogoController@index')->name('client-logo');
Route::post('/store/client-logo','App\Http\Controllers\ClientLogoController@store')->name('store-logo');
Route::get('/edit/client-logo/{id}','App\Http\Controllers\ClientLogoController@edit')->name('edit-logo');
Route::get('/delete/client-logo/{id}','App\Http\Controllers\ClientLogoController@destroy');
Route::post('/update/client-logo/{id}','App\Http\Controllers\ClientLogoController@update')->name('update-logo');

//Regristration List Routes
Route::get('/user-list','App\Http\Controllers\AdminController@list')->name('user-list');

//Setting Routes
Route::get('/manage-setting','App\Http\Controllers\SettingController@index')->name('setting');
Route::get('/add/setting','App\Http\Controllers\SettingController@add')->name('add-setting');
Route::post('/store/setting','App\Http\Controllers\SettingController@store')->name('store-setting');
Route::get('/edit/setting','App\Http\Controllers\SettingController@edit')->name('edit-setting');
Route::get('/delete/setting/{id}','App\Http\Controllers\SettingController@destroy');
Route::post('/update/setting/{id}','App\Http\Controllers\SettingController@update')->name('update-setting');


//Front Routes

Route::group(["middleware" => ["language"]], function(){
    Route::get('/','App\Http\Controllers\FrontController@index')->name('/');
    Route::get('/image-gallery','App\Http\Controllers\GalleryController@index');
    Route::get('/vedio-gallery','App\Http\Controllers\GalleryController@vedio');
    Route::get('/image-gallery/{id}','App\Http\Controllers\GalleryController@view');
    Route::get('/about','App\Http\Controllers\AboutController@index');
    Route::get('/terms-conditions','App\Http\Controllers\ContentPagesController@index')->name('terms');
    Route::get('/privacy-policy','App\Http\Controllers\ContentPagesController@index')->name('privacy');
    Route::get('/copyright-policy','App\Http\Controllers\ContentPagesController@index')->name('copyright');
    Route::get('/hyper-linking-policy','App\Http\Controllers\ContentPagesController@index')->name('hyperlink');
    Route::get('/accessbility-statement','App\Http\Controllers\ContentPagesController@index')->name('statement');
    Route::get('/rti','App\Http\Controllers\ContentPagesController@index')->name('rti');
    Route::get('/screen_reader_access','App\Http\Controllers\ContentPagesController@index')->name('screen_reader_access');
    Route::get('/report-card','App\Http\Controllers\ReportCardController@index')->name('repord-card');
    Route::get('/registration','App\Http\Controllers\UserController@register')->name('registration');
    Route::post('/registered','App\Http\Controllers\UserController@registered')->name('registered');
    Route::get('/success','App\Http\Controllers\UserController@success')->name('success');
    Route::get('/login','App\Http\Controllers\UserController@viewLogin')->name('login');
    Route::post('/check','App\Http\Controllers\UserController@login')->name('check');
});
Route::get('/change','App\Http\Controllers\LocalizationController@lang_change');
