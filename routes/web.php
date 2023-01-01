<?php
  
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\HomeController;
  
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
    return view('welcome');
});
  
Auth::routes();
/*Admin Routes List*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::get('/admin/drivers', [HomeController::class, 'drivers'])->name('admin.drivers');
    Route::post('/admin/addDriver', [HomeController::class, 'addDriver'])->name('admin.addDriver');
    Route::get('/admin/operators', [HomeController::class, 'operators'])->name('admin.operators');
    Route::post('/admin/addOperator', [HomeController::class, 'addOperator'])->name('admin.addOperator');
    Route::get('/admin/transportations', [HomeController::class, 'transportations'])->name('admin.transportations');
    Route::post('/admin/addTrans', [HomeController::class, 'addTrans'])->name('admin.addTrans');
});
  
/*Operator Routes List*/
Route::middleware(['auth', 'user-access:operator'])->group(function () {
  
    Route::get('/operator/home', [HomeController::class, 'operatorHome'])->name('operator.home');
});