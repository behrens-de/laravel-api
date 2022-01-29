<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


# ROUTE = http://localhost:8000/api/... (Example mit artisan serrver)
# Händisch erstellte Routs
// Route::get('/products',[ProductController::class, 'index']);
// Route::post('/products', [ProductController::class, 'store']);
// Route::get('/product/{id}', [ProductController::class, 'show']);
 
# Mit Route::resources werden CRUD Routs erstellt 
Route::resource('products', ProductController::class);
# Route um Produkte via Name zu finden

# Aufteilen der Routen 
# Public
Route::post('/register', [AuthController::class, 'register']);
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{id}', [ProductController::class, 'show']);
Route::get('/products/search/{name}', [ProductController::class, 'search']);

# Private with Authentication
Route::group(['middleware'=>['auth:sanctum']], function(){
    Route::post('/products', [ProductController::class, 'store']);
    Route::put('/products/{id}', [ProductController::class, 'update']);
    Route::delete('/products/{id}', [ProductController::class, 'destroy']);
});

# Not used LARAVEL DEFAULT 
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
