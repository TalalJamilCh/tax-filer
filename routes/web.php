<?php

use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewsController;
use App\Http\Controllers\SubscriberController;

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

Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/service-details', function () {
    return view('service-details');
});
Route::get('/blogs', function () {
    return view('blogs');
});
Route::get('/blog-details', function () {
    return view('blog-details');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/tax-calculate', function(){
    return view('tax-calculate');
});
Route::GET('/service/best-tax-consultant-in-lahore', [ViewsController::class,'best_tax_consultant_in_lahore']);
Route::GET('/service/copyrights-registration-in-pakistan', [ViewsController::class,'copyrights_registration_in_pakistan']);
Route::GET('/service/foreign-company-registration', [ViewsController::class,'foreign_company_registration']);
Route::GET('/service/how-can-overseas-pakistanis-become-tax-filers', [ViewsController::class,'overseas_become_tax_filers']);
Route::GET('/service/how-can-you-become-a-tax-filer-in-pakistan', [ViewsController::class,'how_to_tax_filer_in_pakistan']);
Route::GET('/service/income-tax-return-filing', [ViewsController::class,'income_tax_return_filing']);
Route::GET('/service/partnership-registration-in-pakistan', [ViewsController::class,'partnership_registration_in_pakistan']);
Route::GET('/service/punjab-revenue-authority-registration', [ViewsController::class,'punjab_revenue_authority_registration']);
Route::GET('/service/sales-tax-registration', [ViewsController::class,'sales_tax_registration']);
Route::GET('/service/trade-mark-registration', [ViewsController::class,'trade_mark_registration']);
Route::GET('/service/registration-of-lahore-chamber-of-commerce', [ViewsController::class,'registration_of_lahore_chamber']);
Route::GET('/service/weboc-registration', [ViewsController::class,'weboc_registration']);
Route::GET('/service/sole-proprietorship-business-registration-in-lahore', [ViewsController::class,'sole_proprietorship_business_registration']);
Route::GET('/service/real-estate-and-construction-company-registration', [ViewsController::class,'real_estate_and_construction_company_registration']);
Route::GET('/service/it-company-and-call-center-registration', [ViewsController::class,'it_company_and_call_center_registration']);
Route::GET('/service/limited-liability-partnership-in-pakistan', [ViewsController::class,'limited_liability_partnership_in_pakistan']);
Route::GET('/service/manufacturing-business-or-industry-registration', [ViewsController::class,'manufacturing_business_registration']);
Route::post('/contact-us', [MailController::class, 'send_email'])->name('admin.email');
Route::post('/subscribe-us', [SubscriberController::class, 'subscribe'])->name('user.subscribe');
