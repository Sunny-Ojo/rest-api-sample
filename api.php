<?php

//assumming this was a real project, this is how the rest api is mainly going to look like, although the structure will also change depending on the nature of the project
use App\Http\Controllers\UsersControllers;

Route::controller(UsersController::class)->prefix('admin')->group(function () {
    Route::get('users', 'index');
    Route::post('users',   'store');
    Route::get('users/{id}', 'show');
    Route::put('users/{id}', 'update');
    Route::delete('users/{id}',   'delete');
});
