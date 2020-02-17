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

Auth::routes([
    'register' => false,
    'password.request' => false,
    'password.reset' => false
]);


Route::get('/', 'HomeController@index', function () {
    Artisan::call('storage:link');
})->name('home');
//Pages
Route::get('/about-bimstec', 'HomeController@about')->name('about-bimstec');
Route::get('/bimstec-guiding-principles', 'HomeController@bimstecGuidingPrinciples')->name('bimstec-guiding-principles');
Route::get('/bimstec-chairmanship', 'HomeController@bimstecChairmanship')->name('bimstec-chairmanship');
Route::get('/bimstec-secretariat', 'HomeController@bimstecSecretariat')->name('bimstec-secretariat');
Route::get('/directors-divisions', 'HomeController@directorsDivisions')->name('directors-divisions');
Route::get('/bimstec-organogram', 'HomeController@bimstecOrganogram')->name('bimstec-organogram');
Route::get('/past-secretary-general', 'HomeController@pastSecretaryGeneral')->name('past-secretary-general');
Route::get('/bimstec-mechanism', 'HomeController@bimstecMechanism')->name('bimstec-mechanism');
Route::get('/secretary-general', 'HomeController@secretaryGeneral')->name('secretary-general');
Route::get('/bimstec-centres', 'HomeController@bimstecCentres')->name('bimstec-centres');
Route::get('/photos', 'HomeController@photos')->name('photos');
Route::get('/videos', 'HomeController@videos')->name('videos');
Route::get('/bimstec-news', 'HomeController@news')->name('bimstec-news');
Route::get('/trade-investment', 'HomeController@tradeInvestment')->name('trade-investment');
Route::get('/transport-communication', 'HomeController@transportCommunication')->name('transport-communication');
Route::get('/energy', 'HomeController@energy')->name('energy');
Route::get('/tourism', 'HomeController@tourism')->name('tourism');
Route::get('/technology', 'HomeController@technology')->name('technology');
Route::get('/fisheries', 'HomeController@fisheries')->name('fisheries');
Route::get('/agriculture', 'HomeController@agriculture')->name('agriculture');
Route::get('/public-health', 'HomeController@publicHealth')->name('public-health');
Route::get('/public-health', 'HomeController@publicHealth')->name('public-health');
Route::get('/poverty-alleviation', 'HomeController@povertyAlleviation')->name('poverty-alleviation');
Route::get('/counter-terrorism-transnational-crime', 'HomeController@counterTerrorismTransnationalCrime')->name('counter-terrorism-transnational-crime');
Route::get('/environment-disaster-management', 'HomeController@environmentDisasterManagement')->name('environment-disaster-management');
Route::get('/people-to-people-contact', 'HomeController@peopleToPeopleContact')->name('people-to-people-contact');
Route::get('/cultural-cooperation', 'HomeController@culturalCooperation')->name('cultural-cooperation');
Route::get('/climate-change', 'HomeController@climateChange')->name('climate-change');
Route::get('/documents', 'HomeController@documents')->name('documents');

Route::get('/news-archive/{month}/{year}', 'HomeController@archiveNews')->name('news-archive');
Route::get('/photos/more/{id}', 'HomeController@photosMore')->name('photos.mores');
Route::post('/search-documents', 'HomeController@searchDocuments')->name('search.document');
Route::get('/secretary-general/page/{id}', 'HomeController@secretaryPage')->name('secretary-page');


//Admin
Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::resource('event', 'EventController');
    Route::resource('document', 'DocumentController');
    Route::get('subcategory/ajax/{id}', 'DocumentController@ajaxSubcategory')->name('ajax-subcategory');
    Route::resource('slider', 'SliderController');
    Route::resource('category', 'CategoryController');
    Route::resource('subcategory', 'SubcategoryController');
    Route::resource('video', 'VideoController');
    Route::resource('gallery', 'GalleryController');
    Route::resource('secretary', 'SecretaryController');
    Route::resource('profile', 'ProfileController');
    Route::get('changePassword', 'ProfileController@changePassword');
    Route::patch('changePassword', 'ProfileController@updatePassword');
    Route::resource('division', 'DivisionController');
    Route::resource('director', 'DirectorController');
});

//Editor
Route::group(['as' => 'editor.', 'prefix' => 'editor', 'namespace' => 'Editor', 'middleware' => ['auth', 'editor']], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::resource('profile', 'ProfileController');
    Route::get('changePassword', 'ProfileController@changePassword');
    Route::patch('changePassword', 'ProfileController@updatePassword');
});
//Member
Route::group(['as' => 'member.', 'prefix' => 'member', 'namespace' => 'Member', 'middleware' => ['auth', 'member']], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});

