<?php

use App\Http\Controllers\ListingContorller;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;


Route::get('/', [ListingContorller::class, 'index']);


// All Listing

Route::get('/listings/create', [ListingContorller::class, 'create']);

//Store Listing Data

Route::post('/listings', [ListingContorller::class,'store']);

//Show Edit Form

Route::get('/listings/{listing}/edit',[
    ListingContorller::class, 'edit'
]);


 // Edit Submit to Update
Route::put('/listings/{listing}',[ListingContorller::class, 'update']);

// delete listing

Route::delete('/listings/{listing}',[ListingContorller::class,'destroy']);


 //single listing

 Route::get('/listings/{listing}', [ ListingContorller::class, 'show']);