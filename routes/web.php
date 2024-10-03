<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Welcome;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\backupController;


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
Route::get('/db-delete', [backupController::class, 'dbDelete']);
Route::get('/db-backup',[backupController::class,'db_backup']);

Route::get('/delete_invoice/{invoice_id}', [AdminController::class,'delete_invoice']);

// Delete routes
Route::delete('/delete_invoice_part/{partId}', [AdminController::class, 'deleteInvoicePart'])->name('deleteInvoicePart');

Route::delete('/delete_invoice_service/{serviceId}', [AdminController::class, 'deleteInvoiceService'])->name('deleteInvoiceService');

Route::post('/add_invoice_service', [AdminController::class, 'add_invoice_service']);


Route::get('/',[Welcome::class,'index']);
Route::get('about',[Welcome::class,'about']);
Route::get('gallery',[Welcome::class,'gallery']);
Route::get('pricing',[Welcome::class,'pricing']);
Route::get('services',[Welcome::class,'services']);
Route::get('/service/{services_page_url}',[Welcome::class,'service_detail']);
Route::get('our_team',[Welcome::class,'our_team']);
Route::get('blog',[Welcome::class,'blog']);
Route::get('brands',[Welcome::class,'brands']);
Route::get('products',[Welcome::class,'products']);
Route::get('/products/{products_page_url}',[Welcome::class,'products_detail']);
Route::get('blog_detail',[Welcome::class,'blog_detail']);
Route::get('contact',[Welcome::class,'contact']);
Route::post('/contactUsEmail', [AdminController::class, 'contactUsEmail']);
Route::get('/send-email', [Welcome::class,'sendEmail']);
Route::post('/postlogin', [AdminController::class,'login']);
Route::get('/login', function () {
    if (Auth::check()) {
        return redirect('/'); 
    }

   $welcomeController = new Welcome();
    return $welcomeController->login();
    
});



// ==================BackEnd===========================
Route::get('/dashboard',[Welcome::class,'dashboard']);
Route::get('/add_services',[Welcome::class,'add_services']);
Route::get('/add_gallery',[Welcome::class,'add_gallery']);
Route::get('/add_products',[Welcome::class,'add_products']);
Route::get('/add_team',[Welcome::class,'add_team']);
Route::get('/add_brands',[Welcome::class,'add_brands']);
Route::get('/user_profile/{id}',[Welcome::class,'user_profile']);
Route::get('/logout',[AdminController::class,'logout']);

Route::get('/add_invoice',[Welcome::class,'add_invoice']);
Route::get('/invoice/{id}',[Welcome::class,'invoice']);
Route::get('/invoice-print/{id}',[Welcome::class,'invoice_print']);
// ================== Save Routes ==========================
Route::post('/save_invoice', [AdminController::class, 'save_invoice']);

Route::post('/save_services', [AdminController::class, 'save_services']);
Route::post('/save_products', [AdminController::class, 'save_products']);
Route::post('/save_team', [AdminController::class, 'save_team']);
Route::post('/save_gallery', [AdminController::class, 'save_gallery']);
Route::post('/save_brands', [AdminController::class, 'save_brands']);
Route::post('/save_blog', [AdminController::class, 'save_blog']);
// ================= Delete Routes =====================
Route::get('/delete_services/{service_id}', [AdminController::class,'delete_services']);
Route::get('/delete_products/{product_id}', [AdminController::class,'delete_products']);
Route::get('/delete_team/{team_id}', [AdminController::class,'delete_team']);
Route::get('/delete_gallery/{gallery_id}', [AdminController::class,'delete_gallery']);
Route::get('/delete_brands/{brand_id}', [AdminController::class,'delete_brands']);
Route::get('/delete_blog/{blog_id}', [AdminController::class,'delete_blog']);
// ================ Edit Routes ================
Route::get('/edit_services/{service_id}',[AdminController::class,'edit_services']);
Route::get('/edit_products/{product_id}',[AdminController::class,'edit_products']);
Route::get('/edit_team/{team_id}',[AdminController::class,'edit_team']);
Route::get('/edit_gallery/{gallery_id}',[AdminController::class,'edit_gallery']);
Route::get('/edit_brands/{brand_id}',[AdminController::class,'edit_brands']);
Route::get('/edit_blog/{blog_id}',[AdminController::class,'edit_blog']);
Route::get('/edit_invoice/{invoice_id}',[AdminController::class,'edit_invoice']);
// ================ Update Routes ================
Route::post('/update_invoice', [AdminController::class,'update_invoice']);
Route::post('/update_services', [AdminController::class,'update_services']);
Route::post('/update_products', [AdminController::class,'update_products']);
Route::post('/update_team', [AdminController::class,'update_team']);
Route::post('/update_gallery', [AdminController::class,'update_gallery']);
Route::post('/update_brands', [AdminController::class,'update_brands']);
Route::post('/update_blog', [AdminController::class,'update_blog']);
Route::post('/update_profile', [AdminController::class,'update_profile']);