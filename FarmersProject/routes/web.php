<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CropController;
use App\Http\Controllers\RegionController;
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

Route::get('/' , function (){
    return view('login-register.login');
});





Route::get('admin/login',[AdminController::class,'login']);
Route::get('admin/authenticate',[AdminController::class,'authenticate']);


Route::get('Farmer/sign-in',[UserController::class,'signin']);
Route::get('Farmer/sign-up',[UserController::class, 'signup']);


//responsible for showing the list of crops
Route::get('Crop/index',[CropController::class,'list']);
// Route::get('Crop/create',[CropController::class,'create']);

//creating and viewing regions

Route::get('/regions', [RegionController::class, 'index'])->name('regions.index');
Route::get('regions/index',[RegionController::class,'index']);
    
//crop
Route::get('Crop/create',[CropController::class,'create']);
