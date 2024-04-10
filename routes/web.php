<?php

use App\Http\Controllers\GenderController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// Log In
Route::controller(UserController::class)->group(function() {
    Route::get('/', 'loginPage');
    Route::post('/user/process/login', 'processLogin');
});

// ROUTES FOR GENDER
Route::controller(GenderController::class)->group(function () {
// Open the gender form
    Route::get('/gender/add', 'adddNewGender')->name('gender.addNewGender');
// Open gender table
    Route::get('/genders', 'gender')->name('gender.gender');
// View specific gender
    Route::get('/gender/show/{id}', 'show')->name('gender.show');
// Edit specific gender (Form)
    Route::get('/gender/edit/{id}', 'edit')->name('gender.edit');
    // Delete specific  gender (Confirmation)
        Route::get('/gender/delete/{id}', 'delete')->name('gender.delete');

// Add gender to the database
    Route::post('/gender/add', 'creategender');
// Update the gender you want to edit
    Route::put('/gender/update/{gender}', 'update')->name('gender.update');
// Delete specific gender
    Route::delete('/gender/destroy/{gender}', 'destroy')->name('gender.destroy');
});

// ROUTES FOR USER
Route::controller(UserController::class)->group(function () {
    // Open user form
    Route::get('/user/add', 'addNewUser')->name('user.addNewUser');
    // Open user table
    Route::get('/users', 'user')->name('user.user');
    // View specific user
    Route::get('/user/show/{id}', 'show')->name('user.show');
    // Edit specific gender (Form)
    Route::get('/user/edit/{id}', 'edit')->name('user.edit');
    // Delete specific  gender (Confirmation)
    Route::get('/user/delete/{id}', 'delete')->name('user.delete');


    // Add user to database
    Route::post('/user/add', 'insertUser');
    // Update the gender you want to edit
    Route::put('/user/update/{user}', 'update')->name('user.update');
    // Delete specific gender
    Route::delete('/user/destroy/{user}', 'destroy')->name('user.destroy');

});
// Route::get('/', function () {
//     return view('gender.dashboard');
// });

// Route::get('edits', function () {
//     return view('user.edit');
// })->name('user.edit');
// Route::get('deletes', function () {
//     return view('user.delete');
// })->name('user.delete');
// Route::get('creates', function () {
//     return view('user.create');
// })->name('user.create');
// Route::get('dashboard', function () {
//     return view('user.dashboard');
// });
// Route::get('genders', function () {
//     return view('user.gender');
// })->name('user.gender');
// Route::get('views', function () {
//     return view('user.view');
// })->name('user.view');
// Route::get('viewspes', function () {
//     return view('user.viewspecific');
// })->name('user.viewspecific');
// Route::get('addgenders', function () {
//     return view('user.addgender');
// })->name('user.addgender');
// To display Genders in the Gender Input
// Route::get('creates', [UserController::class, 'showGender'])->name('user.create');
//Crud Operations Route
// Route::post('submit_data', [UserController::class, 'submit_data']);
// Route::post('submit_gender', [UserController::class, 'creategender']);
//Display Genders in Table
// //Display Users in Table
// Route::get('/views', [UserController::class, 'displayUsers'])->name('user.view');
// //To Display Gender Demo
// Route::get('genderform', [GenderController::class, 'viewGender']);
// //Routes to store Gender in DB
// Route::post('gender_add', [GenderController::class, 'store']);
// //Disply in Table
// Route::get('/gendertable', [GenderController::class, 'index']);
