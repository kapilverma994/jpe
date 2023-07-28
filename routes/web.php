<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [FrontendController::class, 'home']);
Route::get('/about-us', [FrontendController::class, 'aboutUs'])->name('about');
Route::get('/line-card', [FrontendController::class, 'lineCard'])->name('line');
Route::get('/reference-design', [FrontendController::class, 'referenceDesign'])->name('referenceDesign');
Route::get('/news-and-updates', [FrontendController::class, 'news'])->name('news');
Route::get('line-card/{id}', [FrontendController::class, 'lineDetail'])->name('lineDetail');
Route::get('/contact-us', [FrontendController::class, 'contact'])->name('contact');
Route::post('submit-enquiry', [FrontendController::class, 'submitEnquiry'])->name('submitEnquiry');
Route::post('newsletter', [FrontendController::class, 'newsletter'])->name('newsletter');
Route::get('/test-kapil', [TestController::class, 'test']);
Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('route:cache');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    return 'Application cache has been cleared';
});
Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});
