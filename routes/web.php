<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Admin\RegisterController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ScrapController;
use App\Http\Controllers\Controller;
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
require __DIR__.'/auth.php';
Route::get('/', function () {
    return view('welcome');
});
Route::get('/en/home', function () {
    return view('en/index');
});
Route::get('/en/about-us', function () {
    return view('en/about-us');
});
Route::get('/en/contact-us', function () {
    return view('en/contact-us');
});
Route::get('/en/become-our-partner', function () {
    return view('en/become-our-partner');
});
Route::get('/en/login', function () {
    return view('en/login');
});
Route::get('/en/register', function () {
    return view('en/register');
});
Route::get('/en/sell-offers', function () {
    return view('en/sell-offers');
});
Route::get('/en/used-auto-parts', function () {
    return view('en/used-auto-parts');
});
Route::get('/en/what-we-buy', function () {
    return view('en/what-we-buy');
});
Route::get('/en/join-scrapy', function () {
    return view('en/join-scrapy');
});
Route::get('/en/affiliate', function () {
    return view('en/affiliate');
});
Route::get('/en/add-address', function () {
    return view('en/add-address');
});
Route::get('/en/bought-material-indus', function () {
    return view('en/bought-material-indus');
});
Route::get('/en/buyer-invoice', function () {
    return view('en/buyer-invoice');
});
Route::get('/en/buyer-performa-invoice', function () {
    return view('en/buyer-performa-invoice');
});
Route::get('/en/cart', function () {
    return view('en/cart');
});
Route::get('/en/checkout', function () {
    return view('en/checkout');
});
Route::get('/en/global', function () {
    return view('en/global');
});

Route::get('/en/industrial', function () {
    return view('en/industrial');
});
Route::get('/en/listing', function () {
    return view('en/listing');
});
Route::get('/en/manage-address', function () {
    return view('en/manage-address');
});
Route::get('/en/manage-address-global', function () {
    return view('en/manage-address-global');
});
Route::get('/en/manage-address-indus', function () {
    return view('en/manage-address-indus');
});
Route::get('/en/manage-membership-ven', function () {
    return view('en/manage-membership-vens');
});
Route::get('/en/manage-order-ven', function () {
    return view('en/manage-order-ven');
});
Route::get('/en/payment', function () {
    return view('en/payment');
});
Route::get('/en/pricing-collection', function () {
    return view('en/pricing-collection');
});
Route::get('/en/pro-dtl', function () {
    return view('en/pro-dtl');
});
Route::get('/en/seller-purchase-order-receipt', function () {
    return view('en/seller-purchase-order-receipt');
});
Route::get('/en/sell-to-us', function () {
    return view('en/sell-to-us');
});


Route::get('/en/thank-you', function () {
    return view('en/thank-you');
});
Route::get('/en/total-payment', function () {
    return view('en/total-payment');
});
Route::get('/en/total-payment-ven', function () {
    return view('en/total-payment-ven');
});
Route::get('/en/transaction-history-global', function () {
    return view('en/transaction-history-global');
});
Route::get('/en/transaction-history-indus', function () {
    return view('en/transaction-history-indus');
});

Route::get('/en/vendor-folder', function () {
    return view('en/vendor-folder');
});



Route::get('/en/sold-material-indus', [Controller::class, 'industry_sold_scrap']);
Route::get('/en/industrial', [Controller::class, 'industry_unsold_scrap']);
Route::get('/en/individual', [Controller::class, 'get_unsold_scrap']);
Route::get('/en/sold-material', [Controller::class, 'get_sold_scrap']);
Route::get('/en/listing', [Controller::class, 'listing']);
Route::post('/update_listing', [Controller::class, 'update_listing']);
Route::post('/industrial_register', [RegisteredUserController::class, 'industrial_register']);
Route::post('/vendor_register', [RegisteredUserController::class, 'vendor_register']);
Route::post('/global_register', [RegisteredUserController::class, 'global_register']);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::group(['middleware' => 'auth'], function(){
   Route::get('/en/edit-profile', [RegisteredUserController::class, 'edit_profile']);
   Route::post('/edit_profile_data', [RegisteredUserController::class, 'edit_profile_data']);
   Route::get('/en/edit-profile-indus', [RegisteredUserController::class, 'edit_profile_industrial']);
   Route::post('/edit_profile_indus_data', [RegisteredUserController::class, 'edit_profile_industrial_data']);
   Route::get('/en/edit-profile-global', [RegisteredUserController::class, 'edit_profile_global']);
   Route::post('/edit_profile_global_data', [RegisteredUserController::class, 'edit_profile_global_data']);
   Route::get('/en/edit-profile-ven', [RegisteredUserController::class, 'edit_profile_ven']);
   Route::post('/edit_profile_ven_data', [RegisteredUserController::class, 'edit_profile_ven_data']);
   Route::get('/en/upload-ind-scrap', [Controller::class, 'upload_ind_scrap']);
   Route::post('/upload_scrap_data', [Controller::class, 'upload_scrap_data'])->name('scrap.update');
  
});

///////////////////////////////       admin       /////////////////////////////////////////////



Route::get('/admin/register', function () {
    return view('admin/register');
});
Route::get('/admin/login', function () {
    return view('admin/login');
});
Route::get('/admin/ind-scrap-category', function () {
    return view('admin/ind-scrap-category');
});
Route::get('/admin/home', [UserController::class, 'home']);
Route::get('/admin/ind-users', [UserController::class, 'ind_user']);
Route::get('/admin/industrial-users', [UserController::class, 'industrial_user']);
Route::get('/admin/global-users', [UserController::class, 'global_user']);
Route::get('/admin/vendor-users', [UserController::class, 'vendor_user']);
Route::get('/admin/add-scrap-category', [ScrapController::class, 'add_scrap_category']);
Route::get('/admin/view-category', [ScrapController::class, 'view_category']);
Route::post('/admin/add-scrap-category-pro', [ScrapController::class, 'add_scrap_category_pro']);
Route::get('/admin/add-scrap-type', [ScrapController::class, 'add_scrap_type']);
Route::post('/admin/add-scrap-type-pro', [ScrapController::class, 'add_scrap_type_pro']);
Route::get('/admin/view-scraptype', [ScrapController::class, 'view_scraptype']);
Route::post('/admin_register', [RegisterController::class, 'admin_register']);
