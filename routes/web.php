<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\BannerController;
use App\Models\User;
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
Auth::routes();
Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('category',CategoryController::class);

Route::get('/user', function () {
    $users = User::latest()->get();
    return view('auth.user.index', compact('users'));
})->name('users');
Route::delete('/user/{user}', function ($user) {
    $user = User::findOrFail($user);
    $image_path = public_path('assets/img/profile/').$user->avatar;
    if (File::exists($image_path)) {
        File::delete($image_path);
    }
    $user->delete();
    return redirect()->back()->with('message', 'Data Deleted.');
})->name('user.destroy');
Route::resource('/profile', ProfileController::class)->only('show', 'update');
Route::resource('/product', ProductController::class);
Route::resource('/contactus', ContactUsController::class);
Route::resource('/aboutus', AboutUsController::class);
Route::resource('/team', TeamController::class);
Route::resource('/banner', BannerController::class);


});