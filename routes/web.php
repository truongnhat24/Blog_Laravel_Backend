<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use Illuminate\Routing\RouteAction;
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
Route::get('/signin', function() {
    return view('users/signin');
});

Route::get('/signup', function() {
    return view('users/signup');
});

Route::get('/recovery', function() {
    return view('users/recovery');
});

Route::get('/recovery_back', function() {
    return view('users/recovery_back');
});

Route::get('/check_inbox', function() {
    return view('users/check_inbox');
});

Route::get('/reset_password', function() {
    return view('users/reset_password');
});

Route::get('/password_back', function() {
    return view('users/password_back');
});

Route::get('/', function ()
{
    return redirect(Route('home'));
});

Route::get('/login', function()
{
    return view('auth/login');
})->name('login');

Route::get('/register', function()
{
    return view('auth/register');
})->name('register');

Route::controller(HomeController::class) -> group(function () 
{
    Route::get('/home', 'index') -> name('home');
});

Route::controller(UserController::class) -> group(function ()
{
    Route::post('/register', 'register') -> name('postRegister');
    Route::post('/login', 'login') -> name('postLogin');
    Route::post('/logout', 'logout')->name('logout');
});

Route::group(['middleware' => ['auth', 'auth.session']], function () {
    Route::controller(BlogController::class)->name('blogs.')->group(function () {
        Route::get('/blog/index/{id}', 'index') -> name('blogIndex');
        Route::get('/blog/add', 'createForm') -> name('addBlogForm');
        Route::get('/blog/edit/{id}', 'edit') -> name('editBlogForm');
        Route::get('/blog/delete/{id}', 'destroy') -> name('deleteBlog');
        Route::get('/blog/view/{id}', 'show') -> name('viewBlog');
        Route::post('/blog/add/create', 'create') -> name('addBlog');
        Route::post('/blog/edit/update/{id}', 'update') -> name('editBlog');
    });
});

Route::group(['middleware' => ['auth', 'auth.session']], function() {
    Route::controller(UserController::class)->name('users.')->group(function() {
        Route::get('/user/index/{id}', 'index') -> name('userIndex');
        Route::get('/user/view/{id}', 'show') -> name('viewUser');
        Route::get('/user/edit/{id}', 'edit') -> name('editUserForm');
        Route::post('/user/edit/update/{id}', 'update') -> name('editUser');
    });
});