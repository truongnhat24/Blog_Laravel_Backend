<?php
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\BlogController;
use App\Http\Controllers\Api\HomeController;
use App\Http\Controllers\Api\CommentController;
use App\Http\Controllers\Api\LikeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('test', function () {
    dd(123);
});

//http://127.0.0.1:8000/api/register

Route::group(['controller' => AuthController::class, 'prefix' => 'auth'], function () {
    Route::post('/register', 'register');
});

Route::group(['controller' => HomeController::class, 'prefix' => 'home'], function ($filename) {
    Route::get('/', 'index');
});

Route::group(['controller'=> UserController::class, 'prefix' => 'users'], function () {
    Route::post('/login', 'login');
});

Route::group(['middleware'=>'verifyJWTtoken'], function() {
    Route::group(['controller' => UserController::class, 'prefix' => 'users'], function () {
        Route::post('/{id}', 'update');
        Route::post('/logout', 'logout');
        Route::get('/', 'index');
    });
    Route::group(['controller' => BlogController::class, 'prefix' => 'posts'], function () {
        Route::get('/index/{id}', 'index');
        Route::post('/', 'create');
        Route::patch('/{id}', 'update');
        Route::delete('/{id}', 'destroy');
        Route::get('/{id}', 'show');
    });
    Route::group(['controller' => CommentController::class, 'prefix' => 'comments'], function () {
        Route::get('/index/{id}', 'index');
        Route::post('/', 'create');
        Route::patch('/{id}', 'update');
        Route::delete('/{id}', 'destroy');
        Route::get('/{id}', 'show');
    });
    Route::group(['controller' => LikeController::class, 'prefix' => 'likes'], function(){
        Route::post('/', 'create');
    });
});

// Route::group(['controller' => UserController::class, 'prefix' => 'users'], function () {
//     Route::post('/login', 'login');
//     Route::post('/{id}', 'update');
//     Route::post('/logout', 'logout');
//     Route::get('/', 'index');
// })->middleware('verifyJWTtoken');

// Route::group(['controller' => BlogController::class, 'prefix' => 'posts'], function () {
//     Route::get('/index/{id}', 'index');
//     Route::post('/', 'create');
//     Route::patch('/{id}', 'update');
//     Route::delete('/{id}', 'destroy');
//     Route::get('/{id}', 'show');
// })->middleware('verifyJWTtoken');

// Route::group(['controller' => CommentController::class, 'prefix' => 'comments'], function () {
//     Route::get('/index/{id}', 'index');
//     Route::post('/', 'create');
//     Route::patch('/{id}', 'update');
//     Route::delete('/{id}', 'destroy');
//     Route::get('/{id}', 'show');
// })->middleware('verifyJWTtoken');

// Route::group(['controller' => LikeController::class, 'prefix' => 'likes'], function(){
//     Route::post('/{type_id}/{type}', 'create');
// })->middleware('verifyJWTtoken');



// Route::get('/storage/images/{filename}', function ($filename) {
//     $path = public_path('/images/' . $filename);
//     if (!File::exists($path)) {
//         abort(404);
//     }
//     $file = File::get($path);
//     $type = File::mimeType($path);
//     $response = Response::make($file, 200);
//     $response->header("Content-Type", $type);
//     return $response;
// })->where('filename', '.*');