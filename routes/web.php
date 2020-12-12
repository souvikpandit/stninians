<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\WebsiteController;


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

Route::get('/',[App\Http\Controllers\website\WebsiteController::class, 'index'])->name('website.index');
Route::get('about',[App\Http\Controllers\website\WebsiteController::class, 'about'])->name('website.about');
Route::get('prospectus',[App\Http\Controllers\website\WebsiteController::class, 'prospectus'])->name('website.prospectus');
Route::get('gallery',[App\Http\Controllers\website\WebsiteController::class, 'gallery'])->name('website.gallery');
Route::get('contact',[App\Http\Controllers\website\WebsiteController::class, 'contact'])->name('website.contact');
Route::get('admission-form',[App\Http\Controllers\website\WebsiteController::class, 'admissionForm'])->name('website.admission-form');
Route::get('login',[App\Http\Controllers\website\WebsiteController::class, 'login'])->name('website.login');

/**Admin Login Needed */
Route::get('dashboard', function () {
    return view('admin.index');
})->name('admin.dashboard');

/***
 * Admin Panel Routing start
 */
Route::get('enquiry/index',[App\Http\Controllers\admin\EnquiryController::class, 'index'])->name('enquiry.index');
Route::get('enquiry/unseen-messages',[App\Http\Controllers\admin\EnquiryController::class, 'notreplied'])->name('enquiry.notreplied');
Route::get('enquiry/reply/{id}',[App\Http\Controllers\admin\EnquiryController::class, 'reply'])->name('enquiry.reply');
Route::get('enquiry/show/{id}',[App\Http\Controllers\admin\EnquiryController::class, 'show'])->name('enquiry.show');
Route::post('enquiry/update/{id}',[App\Http\Controllers\admin\EnquiryController::class, 'update'])->name('enquiry.update');

Route::post('raise-enquiry/',[App\Http\Controllers\admin\EnquiryController::class, 'store'])->name('enquiry.raise');


Route::get('cms/seo-manager',[App\Http\Controllers\admin\CMSController::class, 'index'])->name('cms.index');
/**
 * Admin Panel Routing End
 */
