<?php
use App\Http\Controllers\SubmissionController;
use Illuminate\Support\Facades\Route;

Route::post('/submit-form', [SubmissionController::class, 'store'])->name('submitForm');

Route::get('/admin/submissions', [SubmissionController::class, 'index'])->name('backend.submissions-manager');
Route::post('/admin/submissions/exportCsv', [SubmissionController::class, 'exportCsv'])->name('backend.submissions-exportCsv');

use App\Http\Controllers\LanguageController;


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

// Auth Routes
require __DIR__.'/auth.php';

// Language Switch
Route::get('language/{language}', [LanguageController::class, 'switch'])->name('language.switch');

Route::get('dashboard', 'App\Http\Controllers\Frontend\FrontendController@index')->name('dashboard');
Route::get('search-results', 'FrontendController@searchResults')->name('search-results');

/*
*
* Frontend Routes
*
* --------------------------------------------------------------------
*/
Route::group(['namespace' => 'App\Http\Controllers\Frontend', 'as' => 'frontend.'], function () {
    
    Route::get('/', 'FrontendController@index')->name('index');
    Route::get('home', 'FrontendController@index')->name('home');
    Route::get('cta', 'FrontendController@cta')->name('cta');
    Route::get('privacy-policy', 'FrontendController@privacy')->name('privacy-policy');
    Route::get('terms-and-conditions', 'FrontendController@terms')->name('terms-and-conditions');

    Route::get('about-investors', 'FrontendController@aboutInvestors')->name('about-investors');
    Route::get('about-startups', 'FrontendController@aboutStartups')->name('about-startups');

    Route::get('about-us', 'FrontendController@aboutUs')->name('about-us');
    Route::get('faq', 'FrontendController@faq')->name('faq');
    Route::get('contact-us', 'FrontendController@contactUs')->name('contact-us');
    Route::get('news', 'FrontendController@news')->name('news');
    Route::get('blog', 'FrontendController@blog')->name('blog');
    Route::get('blog-category/{slug}', 'FrontendController@blogCategory')->name('blog-category');
    Route::get('news-category/{slug}', 'FrontendController@newsCategory')->name('news-category');
    Route::get('events', 'FrontendController@events')->name('events');

    Route::get('event/{id}', 'FrontendController@singleEvent')->name('single.event');
    Route::get('news/{id}', 'FrontendController@singleNews')->name('single.news');
    Route::get('blog/{id}', 'FrontendController@singleBlog')->name('single.blog');

    Route::group(['middleware' => ['auth']], function () {
        /*
        *
        *  Users Routes
        *
        * ---------------------------------------------------------------------
        */
        $module_name = 'users';
        $controller_name = 'UserController';
        Route::get('profile/{id}', ['as' => "$module_name.profile", 'uses' => "$controller_name@profile"]);
        Route::get('profile/{id}/edit', ['as' => "$module_name.profileEdit", 'uses' => "$controller_name@profileEdit"]);
        Route::patch('profile/{id}/edit', ['as' => "$module_name.profileUpdate", 'uses' => "$controller_name@profileUpdate"]);
        Route::get('profile/changePassword/{id}', ['as' => "$module_name.changePassword", 'uses' => "$controller_name@changePassword"]);
        Route::patch('profile/changePassword/{id}', ['as' => "$module_name.changePasswordUpdate", 'uses' => "$controller_name@changePasswordUpdate"]);
        Route::get("$module_name/emailConfirmationResend/{id}", ['as' => "$module_name.emailConfirmationResend", 'uses' => "$controller_name@emailConfirmationResend"]);
        Route::delete("$module_name/userProviderDestroy", ['as' => "$module_name.userProviderDestroy", 'uses' => "$controller_name@userProviderDestroy"]);
    });
});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth', 'can:view_backend']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

/*
*
* Backend Routes
* These routes need view-backend permission
* --------------------------------------------------------------------
*/

use App\Http\Controllers\Backend\BackendController;

Route::get('/submission-manager', [BackendController::class, 'submissionManager']);

Route::group(['namespace' => 'App\Http\Controllers\Backend', 'prefix' => 'admin', 'as' => 'backend.', 'middleware' => ['auth', 'can:view_backend']], function () {
    /**
     * Backend Dashboard
     * Namespaces indicate folder structure.
     */
    Route::get('/', 'BackendController@index')->name('home');
    Route::get('dashboard', 'BackendController@index')->name('dashboard');
    
    Route::get('submission-manager', 'BackendController@submissionManager')->name('submission-manager');
    Route::get('content-manager', 'BackendController@contentManager')->name('content-manager');
    Route::get('faq-manager', 'BackendController@faqManager')->name('faq-manager');
    Route::post('submit-faq', 'BackendController@submitFAQ')->name('submit-faq');
    Route::post('update-faq', 'BackendController@updateFAQ')->name('update-faq');
    Route::post('delete-faq', 'BackendController@deleteFAQ')->name('delete-faq');
    Route::post('home-page-content-submit', 'BackendController@homePageContentSubmit')->name('home-page-content-submit');
    Route::post('investors-page-content-submit', 'BackendController@investorsPageContentSubmit')->name('investors-page-content-submit');
    Route::post('startups-page-content-submit', 'BackendController@startupsPageContentSubmit')->name('startups-page-content-submit');
    Route::post('about-page-content-submit', 'BackendController@aboutPageContentSubmit')->name('about-page-content-submit');
    Route::post('contact-page-content-submit', 'BackendController@contactPageContentSubmit')->name('contact-page-content-submit');
    Route::post('header-and-footer-content-submit', 'BackendController@headerAndFooterContentSubmit')->name('header-and-footer-content-submit');
    

    /*
     *
     *  Settings Routes
     *
     * ---------------------------------------------------------------------
     */
    Route::group(['middleware' => ['permission:edit_settings']], function () {
        $module_name = 'settings';
        $controller_name = 'SettingController';
        Route::get("$module_name", "$controller_name@index")->name("$module_name");
        Route::post("$module_name", "$controller_name@store")->name("$module_name.store");
    });

    /*
    *
    *  Notification Routes
    *
    * ---------------------------------------------------------------------
    */
    $module_name = 'notifications';
    $controller_name = 'NotificationsController';
    Route::get("$module_name", ['as' => "$module_name.index", 'uses' => "$controller_name@index"]);
    Route::get("$module_name/markAllAsRead", ['as' => "$module_name.markAllAsRead", 'uses' => "$controller_name@markAllAsRead"]);
    Route::delete("$module_name/deleteAll", ['as' => "$module_name.deleteAll", 'uses' => "$controller_name@deleteAll"]);
    Route::get("$module_name/{id}", ['as' => "$module_name.show", 'uses' => "$controller_name@show"]);

    /*
    *
    *  Backup Routes
    *
    * ---------------------------------------------------------------------
    */
    $module_name = 'backups';
    $controller_name = 'BackupController';
    Route::get("$module_name", ['as' => "$module_name.index", 'uses' => "$controller_name@index"]);
    Route::get("$module_name/create", ['as' => "$module_name.create", 'uses' => "$controller_name@create"]);
    Route::get("$module_name/download/{file_name}", ['as' => "$module_name.download", 'uses' => "$controller_name@download"]);
    Route::get("$module_name/delete/{file_name}", ['as' => "$module_name.delete", 'uses' => "$controller_name@delete"]);

    /*
    *
    *  Roles Routes
    *
    * ---------------------------------------------------------------------
    */
    $module_name = 'roles';
    $controller_name = 'RolesController';
    Route::resource("$module_name", "$controller_name");

    /*
    *
    *  Users Routes
    *
    * ---------------------------------------------------------------------
    */
    $module_name = 'users';
    $controller_name = 'UserController';
    Route::get("$module_name/profile/{id}", ['as' => "$module_name.profile", 'uses' => "$controller_name@profile"]);
    Route::get("$module_name/profile/{id}/edit", ['as' => "$module_name.profileEdit", 'uses' => "$controller_name@profileEdit"]);
    Route::patch("$module_name/profile/{id}/edit", ['as' => "$module_name.profileUpdate", 'uses' => "$controller_name@profileUpdate"]);
    Route::get("$module_name/emailConfirmationResend/{id}", ['as' => "$module_name.emailConfirmationResend", 'uses' => "$controller_name@emailConfirmationResend"]);
    Route::delete("$module_name/userProviderDestroy", ['as' => "$module_name.userProviderDestroy", 'uses' => "$controller_name@userProviderDestroy"]);
    Route::get("$module_name/profile/changeProfilePassword/{id}", ['as' => "$module_name.changeProfilePassword", 'uses' => "$controller_name@changeProfilePassword"]);
    Route::patch("$module_name/profile/changeProfilePassword/{id}", ['as' => "$module_name.changeProfilePasswordUpdate", 'uses' => "$controller_name@changeProfilePasswordUpdate"]);
    Route::get("$module_name/changePassword/{id}", ['as' => "$module_name.changePassword", 'uses' => "$controller_name@changePassword"]);
    Route::patch("$module_name/changePassword/{id}", ['as' => "$module_name.changePasswordUpdate", 'uses' => "$controller_name@changePasswordUpdate"]);
    Route::get("$module_name/trashed", ['as' => "$module_name.trashed", 'uses' => "$controller_name@trashed"]);
    Route::patch("$module_name/trashed/{id}", ['as' => "$module_name.restore", 'uses' => "$controller_name@restore"]);
    Route::get("$module_name/index_data", ['as' => "$module_name.index_data", 'uses' => "$controller_name@index_data"]);
    Route::get("$module_name/index_list", ['as' => "$module_name.index_list", 'uses' => "$controller_name@index_list"]);
    Route::resource("$module_name", "$controller_name");
    Route::patch("$module_name/{id}/block", ['as' => "$module_name.block", 'uses' => "$controller_name@block", 'middleware' => ['permission:block_users']]);
    Route::patch("$module_name/{id}/unblock", ['as' => "$module_name.unblock", 'uses' => "$controller_name@unblock", 'middleware' => ['permission:block_users']]);
});

