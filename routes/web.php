<?php

use Illuminate\Support\Facades\Route;
use App\Models\Static_Content;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\CommonController;
use App\Http\Controllers\QuestionnaireController;
use App\Http\Controllers\PerformanceController;
use App\Http\Controllers\LearningOutcomeController;
use App\Http\Controllers\FeedbackController;
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

Route::get('genrate_key',[UploadController::class,'genrate_key']);
Route::get('view_parti_g3_school',[CommonController::class,'view_parti_g3_school']);
Route::get('questionnaire_calculation',[PerformanceController::class,'questionnaireCalculation']);
Route::get('generateAt3SetForLanguage',[PerformanceController::class,'generateAt3SetForLanguage']);
Route::get('get_feedback',[FeedbackController::class,'get_feedback']);
Route::get('generateFeedbackanswerkey',[FeedbackController::class,'generateFeedbackanswerkey']);
Route::get('pqQuestionMaster',[FeedbackController::class,'pqQuestionMaster']);
Route::get('get_feedback_tq',[FeedbackController::class,'get_feedback_tq']);
Route::get('generateFeedbackanswerkeyTq',[FeedbackController::class,'generateFeedbackanswerkeyTq']);
Route::get('get_feedback_sq',[FeedbackController::class,'get_feedback_sq']);
Route::get('generateFeedbackanswerkeySq',[FeedbackController::class,'generateFeedbackanswerkeySq']);

Route::get('home', 'App\Http\Controllers\MainController@landing');
Route::post('post-search', 'App\Http\Controllers\MainController@search')->name('post-search');
Route::post('preloaddata', 'App\Http\Controllers\MainController@preload')->name('preloaddata');


//Admin routes
Route::group(["middleware" => ["secure"]], function(){
 
Route::get('secure-admin', 'App\Http\Controllers\AdminController@index')->name('secure-admin');
Route::get('secure-admin/forget-password', function () {
    return view('admin.forget-password');
})->name('forget-password');
Route::post('proceed', 'App\Http\Controllers\AdminController@proceed')->name('proceed');
Route::post('login-post', 'App\Http\Controllers\AdminController@login');
Route::get('register', 'App\Http\Controllers\AdminController@register');
Route::get('/token={email}/{date}/{time}', 'App\Http\Controllers\AdminController@viewReset');
Route::post('/succeed/{email}', 'App\Http\Controllers\AdminController@successful')->name('succeed');
});




Route::group(["middleware" => ["islogin"]], function(){
Route::get('/secure-admin/dashboard', 'App\Http\Controllers\AdminController@dashboard')->name('dashboard');
Route::get('/secure-admin/logout', 'App\Http\Controllers\AdminController@logout');

// Manage data route
Route::get('/secure-admin/upload-csv-files', function () {
    return view('welcome');
});
Route::resource('upload',UploadController::class);

//Event Routes

Route::get('/secure-admin/event','App\Http\Controllers\EventController@index')->name('events');


Route::post('/secure-admin/add/event', 'App\Http\Controllers\EventController@store')->name('store-event');
Route::get('/secure-admin/edit/event/{id}', 'App\Http\Controllers\EventController@edit');
Route::post('/secure-admin/update/event/{id}', 'App\Http\Controllers\EventController@update');


//Event Images & videosRoutes

Route::get('/secure-admin/event/images/{id}','App\Http\Controllers\EventController@getImages')->name('getImages');
Route::post('/secure-admin/add/images/{id}', 'App\Http\Controllers\EventController@addImages');
Route::get('/secure-admin/delete/image/{image}/{id}', 'App\Http\Controllers\EventController@deleteImage');
Route::get('/secure-admin/videos','App\Http\Controllers\EventController@videos')->name('videos');
Route::post('/secure-admin/add/video', 'App\Http\Controllers\EventController@addvideo');
Route::get('/secure-admin/delete/video/{id}', 'App\Http\Controllers\EventController@deletevideo');

//Profile
Route::get('/secure-admin/profile','App\Http\Controllers\AdminController@profile');
Route::post('/secure-admin/update/profile','App\Http\Controllers\AdminController@updateProfile')->name('update-profile');

//Team Routes
Route::get('/secure-admin/team-manager','App\Http\Controllers\TeamController@index')->name('team');
Route::get('/secure-admin/add/member','App\Http\Controllers\TeamController@add')->name('add-member');
Route::post('/secure-admin/store/member','App\Http\Controllers\TeamController@store')->name('store-member');
Route::get('/secure-admin/edit/member/{id}','App\Http\Controllers\TeamController@edit')->name('edit-member');
Route::post('/secure-admin/update/member/{id}','App\Http\Controllers\TeamController@update')->name('update-member');
Route::get('/secure-admin/delete/member/{id}','App\Http\Controllers\TeamController@destroy');

//Static content Routes
Route::get('secure-admin/static-content','App\Http\Controllers\StaticContentController@index')->name('content');
Route::get('/secure-admin/add/content','App\Http\Controllers\StaticContentController@add')->name('add-content');
Route::post('/secure-admin/store/content','App\Http\Controllers\StaticContentController@store')->name('store-content');
Route::get('/secure-admin/edit/content/{id}','App\Http\Controllers\StaticContentController@edit')->name('edit-content');
Route::get('/secure-admin/delete/content/{id}','App\Http\Controllers\StaticContentController@destroy');
Route::post('/secure-admin/update/content/{id}','App\Http\Controllers\StaticContentController@update')->name('update-content');


//Master Routes

//District Routes
Route::get('/secure-admin/district','App\Http\Controllers\MasterController@district')->name('district');
Route::get('/secure-admin/add/district','App\Http\Controllers\MasterController@addDistrict')->name('add-district');
Route::post('/secure-admin/store/district','App\Http\Controllers\MasterController@storeDistrict')->name('store-district');
Route::get('/secure-admin/edit/district/{id}','App\Http\Controllers\MasterController@editDistrict')->name('edit-district');
Route::get('/secure-admin/delete/district/{id}','App\Http\Controllers\MasterController@destroyDistrict');
Route::post('/secure-admin/update/district/{id}','App\Http\Controllers\MasterController@updateDistrict')->name('update-district');

//State Routes
Route::get('/secure-admin/state','App\Http\Controllers\MasterController@state')->name('state');
Route::get('/secure-admin/add/state','App\Http\Controllers\MasterController@addState')->name('add-state');
Route::post('/secure-admin/store/state','App\Http\Controllers\MasterController@storeState')->name('store-state');
Route::get('/secure-admin/edit/state/{id}','App\Http\Controllers\MasterController@editState')->name('edit-state');
Route::get('/secure-admin/delete/state/{id}','App\Http\Controllers\MasterController@destroyState');
Route::post('/secure-admin/update/state/{id}','App\Http\Controllers\MasterController@updateState')->name('update-state');


// End Master Routes


//National Routes
Route::get('/secure-admin/national-statistic','App\Http\Controllers\NationalController@index')->name('national');
Route::get('/secure-admin/add/national','App\Http\Controllers\NationalController@add')->name('add-national');
Route::post('/secure-admin/store/national','App\Http\Controllers\NationalController@store')->name('store-national');
Route::get('/secure-admin/edit/national/{id}','App\Http\Controllers\NationalController@edit')->name('edit-national');
Route::get('/secure-admin/delete/national/{id}','App\Http\Controllers\NationalController@destroy');
Route::post('/secure-admin/update/national/{id}','App\Http\Controllers\NationalController@update')->name('update-national');

//Banner Routes
Route::get('/secure-admin/manage-banner','App\Http\Controllers\BannerController@index')->name('manage-banner');
Route::post('/secure-admin/store/banner','App\Http\Controllers\BannerController@store')->name('store-banner');
Route::get('/secure-admin/edit/banner/{id}','App\Http\Controllers\BannerController@edit')->name('edit-banner');
Route::get('/secure-admin/delete/banner/{image}/{id}','App\Http\Controllers\BannerController@destroy');
Route::post('/secure-admin/update/banner/{id}','App\Http\Controllers\BannerController@update')->name('update-banner');

//Client Logo Routes
Route::get('/secure-admin/client-logo','App\Http\Controllers\ClientLogoController@index')->name('client-logo');
Route::post('/secure-admin/store/client-logo','App\Http\Controllers\ClientLogoController@store')->name('store-logo');
Route::get('/secure-admin/edit/client-logo/{id}','App\Http\Controllers\ClientLogoController@edit')->name('edit-logo');
Route::get('/secure-admin/delete/client-logo/{id}','App\Http\Controllers\ClientLogoController@destroy');
Route::post('/secure-admin/update/client-logo/{id}','App\Http\Controllers\ClientLogoController@update')->name('update-logo');

//Regristration List Routes
Route::get('/secure-admin/registration-list','App\Http\Controllers\AdminController@list')->name('user-list');

//Setting Routes
Route::get('/secure-admin/manage-setting','App\Http\Controllers\SettingController@index')->name('setting');
Route::get('/secure-admin/add/setting','App\Http\Controllers\SettingController@add')->name('add-setting');
Route::post('/secure-admin/store/setting','App\Http\Controllers\SettingController@store')->name('store-setting');
Route::get('/secure-admin/edit/setting','App\Http\Controllers\SettingController@edit')->name('edit-setting');
Route::get('/secure-admin/delete/setting/{id}','App\Http\Controllers\SettingController@destroy');
Route::post('/secure-admin/update/setting/{id}','App\Http\Controllers\SettingController@update')->name('update-setting');

//Program Routes
Route::get('/secure-admin/static-program','App\Http\Controllers\StaticProgramController@index')->name('program');
Route::get('/secure-admin/add/program','App\Http\Controllers\StaticProgramController@add')->name('add-program');
Route::post('/secure-admin/store/program','App\Http\Controllers\StaticProgramController@store')->name('store-program');
Route::get('/secure-admin/edit/program/{id}','App\Http\Controllers\StaticProgramController@edit')->name('edit-program');
Route::get('/secure-admin/delete/program/{id}','App\Http\Controllers\StaticProgramController@destroy');
Route::post('/secure-admin/update/program/{id}','App\Http\Controllers\StaticProgramController@update')->name('update-program');

//User Routes
Route::get('/secure-admin/user','App\Http\Controllers\PermissionController@index')->name('user');
Route::get('/secure-admin/add/user','App\Http\Controllers\PermissionController@add')->name('add-user');
Route::post('/secure-admin/store/user','App\Http\Controllers\PermissionController@store')->name('store-user');
Route::get('/secure-admin/view/user/permission/{id}','App\Http\Controllers\PermissionController@permit')->name('permit-user');
Route::post('/secure-admin/store/user/permission/{id}','App\Http\Controllers\PermissionController@storePermit')->name('store-permission');
Route::get('/secure-admin/delete/user/{id}','App\Http\Controllers\PermissionController@destroy');

});



//Front Routes

Route::group(["middleware" => ["language"]], function(){
    Route::get('/','App\Http\Controllers\FrontController@index')->name('/');
    Route::get('/gallery/image-gallery','App\Http\Controllers\GalleryController@index');
    Route::get('/gallery/video-gallery','App\Http\Controllers\GalleryController@video');
    Route::get('/gallery/image-gallery/{id}','App\Http\Controllers\GalleryController@view');
    Route::get('/about-nas','App\Http\Controllers\AboutController@index');
    Route::get('/terms-conditions','App\Http\Controllers\ContentPagesController@index')->name('terms');
    Route::get('/privacy-policy','App\Http\Controllers\ContentPagesController@index')->name('privacy');
    Route::get('/copyright-policy','App\Http\Controllers\ContentPagesController@index')->name('copyright');
    Route::get('/hyper-linking-policy','App\Http\Controllers\ContentPagesController@index')->name('hyperlink');
    Route::get('/accessbility-statement','App\Http\Controllers\ContentPagesController@index')->name('statement');
    Route::get('/rti','App\Http\Controllers\ContentPagesController@index')->name('rti');
    Route::get('/screen_reader_access','App\Http\Controllers\ContentPagesController@index')->name('screen_reader_access');
    Route::get('/report-card','App\Http\Controllers\ReportCardController@index')->name('repord-card');
    Route::get('/data-share/registration','App\Http\Controllers\UserController@register')->name('registration');
    Route::post('/registered','App\Http\Controllers\UserController@registered')->name('registered');
    Route::get('/data-share/success','App\Http\Controllers\UserController@success')->name('success');
    Route::get('/data-share/login','App\Http\Controllers\UserController@viewLogin')->name('login');
    Route::post('/check','App\Http\Controllers\UserController@login')->name('check');
    Route::get('/nas-program','App\Http\Controllers\FrontController@program');
    Route::get('/nas-team','App\Http\Controllers\FrontController@team');
    Route::get('/data-share','App\Http\Controllers\FrontController@data');
    Route::get('/gallery','App\Http\Controllers\FrontController@gallery');
    Route::get('/visualization',function(){
        return view('front.visualization.visualization');
    });
});
Route::get('/change','App\Http\Controllers\LocalizationController@lang_change');
