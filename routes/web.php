<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkerController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\PadController;
use App\Http\Controllers\LedgerController;
use App\Http\Controllers\StakeholderController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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
//     return view('admin.dashboard');
// });

Route::get('/', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])
                ->middleware('auth')
                ->name('logout');



// Users All Routes
Route::prefix('user')->group(function(){

     Route::get('/profile',[UserController::class,'profile'])->name('user.profile');
    // Route::post('/profile/update',[UserController::class,'profile_update'])->name('profile.update');
    // Route::post('/profile/image',[UserController::class,'profile_image'])->name('profile.image');
    // Route::post('/profile/password',[UserController::class,'profile_password'])->name('profile.password');
    Route::get('/users_list',[UserController::class,'users_list'])->name('users.list');
    Route::get('/users_list/edit/{id}',[UserController::class,'users_list_edit'])->name('users.list.edit');
    Route::get('/users_list/delete/{id}',[UserController::class,'users_list_delete'])->name('users.list.delete');
});
Route::get('/show_password',[UserController::class,'show_password'])->name('show_password');
Route::post('/update_password',[UserController::class,'update_password'])->name('update_password');
Route::post('/users_list/update',[UserController::class,'users_list_update'])->name('users_list_update');




//these routes are for Workers
Route::get('/workers',[WorkerController::class,'show_worker_page'])->name('show_worker_page');
Route::get('/workers/add',[WorkerController::class,'add_worker_page'])->name('add_worker_page');
Route::post('/Upload_workers/add',[WorkerController::class,'upload_workers'])->name('upload_workers');
Route::get('/update_worker/{id}',[WorkerController::class,'update_worker'])->name('update_worker');
Route::post('/edit_workers/{id}',[WorkerController::class,'edit_workers'])->name('edit_workers');
Route::get('/delete_worker/{id}',[WorkerController::class,'delete_worker'])->name('delete_worker');



//these routes are for services
Route::get('/services',[ServiceController::class,'show_services_page'])->name('show_services_page');
Route::get('/services/add',[ServiceController::class,'add_services_page'])->name('add_services_page');
Route::post('/Upload_services/add',[ServiceController::class,'upload_services'])->name('upload_services');
Route::get('/update_services/{id}',[ServiceController::class,'update_services'])->name('update_services');
Route::post('/edit_services/{id}',[ServiceController::class,'edit_services'])->name('edit_services');
Route::get('/delete_services/{id}',[ServiceController::class,'delete_services'])->name('delete_services');

//these routes are for companies
Route::get('/companies',[CompanyController::class,'show_companies_page'])->name('show_companies_page');
Route::get('/companies/add',[CompanyController::class,'add_companies_page'])->name('add_companies_page');
Route::post('/Upload_companies/add',[CompanyController::class,'upload_companies'])->name('upload_companies');
Route::get('/update_companies/{id}',[CompanyController::class,'update_companies'])->name('update_companies');
Route::post('/edit_companies/{id}',[CompanyController::class,'edit_companies'])->name('edit_companies');
Route::get('/delete_companies/{id}',[CompanyController::class,'delete_companies'])->name('delete_companies');


//these routes are for Letter Pad
Route::get('/letter_pad',[PadController::class,'show_pad_page'])->name('show_pad_page');
Route::get('/letter_pad/add',[PadController::class,'add_pad_page'])->name('add_pad_page');
Route::post('/Upload_pad/add',[PadController::class,'upload_pad'])->name('upload_pad');
Route::get('/update_pad/{id}',[PadController::class,'update_pad'])->name('update_pad');
Route::post('/edit_pad/{id}',[PadController::class,'edit_pad'])->name('edit_pad');
Route::get('/delete_pad/{id}',[PadController::class,'delete_pad'])->name('delete_pad');


//these routes are for Lejer
Route::get('/ledger',[LedgerController::class,'show_ledger_page'])->name('show_ledger_page');
Route::get('/ledger/add',[LedgerController::class,'add_ledger_page'])->name('add_ledger_page');
Route::post('/ledger/upload',[LedgerController::class,'upload_ledger'])->name('upload_ledger'); Route::get('/update_ledger/{id}',[LedgerController::class,'update_ledger'])->name('update_ledger');
Route::post('/ledger/edit/{id}',[LedgerController::class,'edit_ledger'])->name('edit_ledger');
Route::get('/ledger/delete/{id}',[LedgerController::class,'delete_ledger'])->name('delete_ledger');


//these routes are for Lejer
Route::get('/stake_holder',[StakeholderController::class,'show_holder_page'])->name('show_holder_page');
Route::get('/add_holder',[StakeholderController::class,'add_holder_page'])->name('add_holder_page');
Route::post('/Upload_holder',[StakeholderController::class,'upload_holder'])->name('upload_holders');
Route::get('/update_holder/{id}',[StakeholderController::class,'update_holder'])->name('update_holder');
Route::post('/edit_holder/{id}',[StakeholderController::class,'edit_holder'])->name('edit_holder');
Route::get('/delete_holder/{id}',[StakeholderController::class,'delete_holder'])->name('delete_holder');
