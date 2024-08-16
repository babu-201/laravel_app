<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::post('/contacts/create', [UserController::class, 'createContacts']);
Route::get('/contacts/all', [UserController::class, 'allContacts']);
Route::get('/contacts/show', [UserController::class, 'showForms']);


Route::get('/contacts/{id}', [UserController::class, 'showSpecificContacts']);

Route::get('/contacts/{id}/edit', [UserController::class, 'editForm']);

Route::put('/contacts/{id}/update', [UserController::class, 'updateContact']);



Route::delete('/contacts/{id}/delete', [UserController::class, 'deleteContact']);


