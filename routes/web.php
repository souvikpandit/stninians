<?php

use Softon\Indipay\Facades\Indipay;
use Illuminate\Support\Facades\Route;
use Rahulreghunath\Textlocal\Textlocal;
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
// Route::get('/pay', function () {
//     $parameters = [
//         //'transaction_no' => '1233221223322',
//         'amount' => '1200.00',
//         'firstname' => 'Jon Doe',
//         'email' => 'jon@doe.com',
//         'phone' => '9836061781',
//         'productinfo' => 'admission-fee'
//       ];
//       $order = Indipay::prepare($parameters);
//       return Indipay::process($order);
// });
Route::get('/',[App\Http\Controllers\website\WebsiteController::class, 'index'])->name('website.index');
Route::get('about',[App\Http\Controllers\website\WebsiteController::class, 'about'])->name('website.about');
Route::get('prospectus',[App\Http\Controllers\website\WebsiteController::class, 'prospectus'])->name('website.prospectus');
Route::get('gallery',[App\Http\Controllers\website\WebsiteController::class, 'gallery'])->name('website.gallery');
Route::get('contact',[App\Http\Controllers\website\WebsiteController::class, 'contact'])->name('website.contact');
Route::get('privacy-policy',[App\Http\Controllers\website\WebsiteController::class, 'privacy'])->name('website.privacy');
Route::get('terms-and-conditions',[App\Http\Controllers\website\WebsiteController::class, 'terms'])->name('website.terms');
Route::post('raise-enquiry/',[App\Http\Controllers\admin\EnquiryController::class, 'store'])->name('enquiry.raise');
//Route::get('getOtpAjax',[App\Http\Controllers\website\WebsiteController::class, 'getOtpAjax'])->name('website.getOtpAjax');

Route::get('Login',[App\Http\Controllers\website\WebsiteController::class, 'login'])->name('website.login');

//Student Routing For Signin
Route::post('student/signin',[App\Http\Controllers\student\StudentController::class, 'register'])->name('student.register');
Route::post('student-dashboard',[App\Http\Controllers\student\StudentLoginController::class, 'login'])->name('student.login');



Auth::routes(['verify' => true]);


/**Admin Login Needed */
Route::group(['middleware' => ['auth','admin']], function () {
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




Route::get('cms/seo-manager',[App\Http\Controllers\admin\CMSController::class, 'index'])->name('cms.index');
Route::get('cms/school-info',[App\Http\Controllers\admin\CMSController::class, 'schoolInfo'])->name('cms.school_info');
Route::get('cms/banner-management',[App\Http\Controllers\admin\CMSController::class, 'schoolBanner'])->name('cms.banner');
Route::get('cms/about-mission-vision',[App\Http\Controllers\admin\CMSController::class, 'schoolAbout'])->name('cms.about');
Route::get('cms/principal-desk',[App\Http\Controllers\admin\CMSController::class, 'schoolPrincipalDesk'])->name('cms.principal_desk');


Route::get('admission/index',[App\Http\Controllers\admin\AdmissionController::class, 'index'])->name('admission.index');
Route::post('admission/details',[App\Http\Controllers\admin\AdmissionController::class, 'admissionDetails'])->name('admission.admission_details');
Route::get('admission/approved',[App\Http\Controllers\admin\AdmissionController::class, 'approved'])->name('admission.approved');
Route::get('admission/pending',[App\Http\Controllers\admin\AdmissionController::class, 'pending'])->name('admission.pending');
Route::get('admission/declined',[App\Http\Controllers\admin\AdmissionController::class, 'declined'])->name('admission.declined');
Route::post('admission/payment',[App\Http\Controllers\admin\AdmissionController::class, 'payment'])->name('admission_payment');
Route::post('admission/declined',[App\Http\Controllers\admin\AdmissionController::class, 'admissionDeclined'])->name('admission_declined');



Route::resource('general', App\Http\Controllers\admin\GeneralController::class);


});

Route::group(['middleware' => ['student_auth','verified']], function () {
    Route::get('student-zone',[App\Http\Controllers\website\WebsiteController::class, 'admissionForm'])->name('website.admission-form');
    Route::get('student-dashboard',[App\Http\Controllers\website\WebsiteController::class, 'admissionDashboard'])->name('website.student-dashboard');
    Route::post('student-admission',[App\Http\Controllers\student\StudentAdmissionController::class,'store'])->name('student.admission');


});
Route::post('student-payment',[App\Http\Controllers\student\StudentPaymentController::class,'payment'])->name('student.payment');
Route::post('/indipay/response/success',[App\Http\Controllers\student\StudentPaymentController::class,'response'])->name('pay.response');
Route::post('/indipay/response/failure',[App\Http\Controllers\student\StudentPaymentController::class,'response'])->name('pay.response');

