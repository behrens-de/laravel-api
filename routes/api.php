<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Product;

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

# ROUTE = http://localhost:8000/api/products
Route::get('/products', function(){
    // Zeigt alle Produkte an
    return Product::all();
});

Route::post('/products', function(){
   // Erstellt ein Produkt
   return Product::create([
       'name' => 'Product One',
       'slug' => 'product-one',
       'description' => 'This is Product One',
       'price' => '99.95'
   ]);  
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
