<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
// Get - URL
// Post -
// Put - Update
// Delete - Delete
// any - todas
// Resource - todas

Route::get('/',[PostController::class, 'index']);