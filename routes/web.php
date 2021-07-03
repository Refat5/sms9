<?php

use App\Http\Controllers\back\MemberController;
use App\Http\Controllers\back\MessagesController;
use App\Http\Controllers\back\PdfDownloadController;
use App\Http\Controllers\back\PhotoGalleryController;
use App\Http\Controllers\back\ServiceController;
use App\Http\Controllers\back\SettingController;
use App\Http\Controllers\back\SliderController;
use App\Http\Controllers\back\SocialActivitesController;
use App\Http\Controllers\front\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/aboutUs', [HomeController::class, 'aboutUs'])->name('aboutUs');
Route::get('/pdf', [HomeController::class, 'allPdf'])->name('allPdf');

Route::get('/notice', [HomeController::class, 'notice'])->name('notice');
Route::get('/photo', [HomeController::class, 'photoGallery'])->name('photoGallery');
Route::get('/socialActivity', [HomeController::class, 'socialActivity'])->name('socialActivity');
Route::get('/list/{type}', [HomeController::class, 'member'])->name('memberList');

Route::group(['prefix' => 'contact', 'as' => 'contact.'], function () {
    Route::get('/home', [HomeController::class, 'contactView'])->name('home');
    Route::post('/contact', [HomeController::class, 'contact'])->name('store');
});

Route::group(['prefix' => 'admin'], function () {
    Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
        return view('back-views.dashbord');
    })->name('admin');

    Route::group(['prefix' => 'slider'], function () {
        Route::get('/', [SliderController::class, 'index'])->name('slider.home');

        Route::get('create', [SliderController::class, 'create'])->name('slider.create');
        Route::post('store', [SliderController::class, 'store'])->name('slider.store');
        Route::get('status/{id}', [SliderController::class, 'status'])->name('slider.status');
        Route::get('edit/{id}', [SliderController::class, 'edit'])->name('slider.edit');
        Route::put('update/{id}', [SliderController::class, 'update'])->name('slider.update');
        Route::delete('delete/{id}', [SliderController::class, 'destroy'])->name('slider.delete');

    });

    Route::group(['prefix' => 'photo'], function () {
        Route::get('/', [PhotoGalleryController::class, 'index'])->name('photo.home');

        Route::get('create', [PhotoGalleryController::class, 'create'])->name('photo.create');
        Route::post('store', [PhotoGalleryController::class, 'store'])->name('photo.store');
        Route::get('status/{id}', [PhotoGalleryController::class, 'status'])->name('photo.status');
        Route::get('edit/{id}', [PhotoGalleryController::class, 'edit'])->name('photo.edit');
        Route::put('update/{id}', [PhotoGalleryController::class, 'update'])->name('photo.update');
        Route::delete('delete/{id}', [PhotoGalleryController::class, 'destroy'])->name('photo.delete');

    });

    Route::group(['prefix' => 'pdf'], function () {
        Route::get('/', [PdfDownloadController::class, 'index'])->name('pdf.home');
        Route::get('create/{id}', [PdfDownloadController::class, 'show'])->name('pdf.show');

        Route::get('create', [PdfDownloadController::class, 'create'])->name('pdf.create');
        Route::post('store', [PdfDownloadController::class, 'store'])->name('pdf.store');
        Route::get('status/{id}', [PdfDownloadController::class, 'status'])->name('pdf.status');
        Route::get('edit/{id}', [PdfDownloadController::class, 'edit'])->name('pdf.edit');
        Route::put('update/{id}', [PdfDownloadController::class, 'update'])->name('pdf.update');
        Route::delete('delete/{id}', [PdfDownloadController::class, 'destroy'])->name('pdf.delete');

    });
    Route::group(['prefix' => 'socialActivite', 'as' => 'socialActivite.'], function () {
        Route::get('/', [SocialActivitesController::class, 'index'])->name('home');

        Route::get('create', [SocialActivitesController::class, 'create'])->name('create');
        Route::post('store', [SocialActivitesController::class, 'store'])->name('store');
        Route::get('status/{id}', [SocialActivitesController::class, 'status'])->name('status');
        Route::get('edit/{id}', [SocialActivitesController::class, 'edit'])->name('edit');
        Route::put('update/{id}', [SocialActivitesController::class, 'update'])->name('update');
        Route::delete('delete/{id}', [SocialActivitesController::class, 'destroy'])->name('delete');

    });
    Route::group(['prefix' => 'members', 'as' => 'members.'], function () {
        Route::get('list/{status}', [MemberController::class, 'index'])->name('home');

        Route::get('create', [MemberController::class, 'create'])->name('create');
        Route::post('store', [MemberController::class, 'store'])->name('store');
        Route::get('status/{id}', [MemberController::class, 'status'])->name('status');
        Route::get('edit/{id}', [MemberController::class, 'edit'])->name('edit');
        Route::put('update/{id}', [MemberController::class, 'update'])->name('update');
        Route::delete('delete/{id}', [MemberController::class, 'destroy'])->name('delete');

    });
    Route::group(['prefix' => 'service', 'as' => 'service.'], function () {
        Route::get('/', [ServiceController::class, 'index'])->name('home');

        Route::get('create', [ServiceController::class, 'create'])->name('create');
        Route::post('store', [ServiceController::class, 'store'])->name('store');
        Route::get('status/{id}', [ServiceController::class, 'status'])->name('status');
        Route::get('edit/{id}', [ServiceController::class, 'edit'])->name('edit');
        Route::put('update/{id}', [ServiceController::class, 'update'])->name('update');
        Route::delete('delete/{id}', [ServiceController::class, 'destroy'])->name('delete');

    });
    Route::group(['prefix' => 'setting'], function () {
        Route::get('/', [SettingController::class, 'index'])->name('setting.home');

        Route::get('our-vision', [SettingController::class, 'our_vision'])->name('setting.vision');
        Route::post('our-vision', [SettingController::class, 'our_VisionUpdate'])->name('setting.visionUpdate');

        Route::get('about-us', [SettingController::class, 'about_us'])->name('setting.about');
        Route::post('about-us', [SettingController::class, 'about_usUpdate'])->name('setting.aboutUpdate');
        Route::post('{name}', [SettingController::class, 'update'])->name('setting.pray');

    });
    Route::get('/video', [SettingController::class, 'video'])->name('setting.video');

    Route::get('/view', [SettingController::class, 'setting'])->name('setting.index');
    Route::post('config/{setting}', [SettingController::class, 'appUpdate'])->name('setting.app');
    Route::get('/social', [SettingController::class, 'socialView'])->name('setting.social');
    Route::post('socialUpdate/{social}', [SettingController::class, 'socialUpdate'])->name('setting.socialLink');

    Route::group(['prefix' => 'messages', 'as' => 'message.'], function () {
        Route::get('/list', [MessagesController::class, 'list'])->name('list');
        Route::delete('delete/{id}', [MessagesController::class, 'destroy'])->name('delete');
        Route::get('view/{id}', [MessagesController::class, 'view'])->name('view');

    });

});
