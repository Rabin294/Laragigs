<?php

use App\Http\Controllers\ListingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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




// Common resources route 
// Verb      | URI                        | Action       | Route Name
// --------------------------------------------------------------------------
// GET       | /resource-name             | index        | resource-name.index
// GET       | /resource-name/create      | create       | resource-name.create
// POST      | /resource-name             | store        | resource-name.store
// GET       | /resource-name/{id}        | show         | resource-name.show
// GET       | /resource-name/{id}/edit   | edit         | resource-name.edit
// PUT/PATCH | /resource-name/{id}        | update       | resource-name.update
// DELETE    | /resource-name/{id}        | destroy      | resource-name.destroy

//All Listing
Route::get('/', [ListingController::class, 'index']);


//Show create form
Route::get('/listings/create', [ListingController::class, 'create']);

//Store listing data
Route::post('/listings', [ListingController::class, 'store']);


// Single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

