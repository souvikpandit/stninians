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
    $slug = "Welcome to";
    return view('admin.index',compact('slug'));
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
Route::get('cms/school-info',[App\Http\Controllers\admin\CMSController::class, 'schoolInfo'])->name('cms.school_info');
Route::get('cms/banner-management',[App\Http\Controllers\admin\CMSController::class, 'schoolBanner'])->name('cms.banner');
Route::get('cms/about-mission-vision',[App\Http\Controllers\admin\CMSController::class, 'schoolAbout'])->name('cms.about');
Route::get('cms/principal-desk',[App\Http\Controllers\admin\CMSController::class, 'schoolPrincipalDesk'])->name('cms.principal_desk');

Route::get('admission/index',[App\Http\Controllers\admin\AdmissionController::class, 'index'])->name('admission.index');
Route::get('admission/details',[App\Http\Controllers\admin\AdmissionController::class, 'admissionDetails'])->name('admission.admission_details');
/**
 * Admin Panel Routing End
 */
