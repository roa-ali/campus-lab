<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;

Route::get('/', function () {
    return view('welcome');
});





Route::get('/hello', function () {
    return 'Hello Laravel';
});


Route::get('/students', [StudentController::class, 'index']);

Route::get('/students/{id}', [StudentController::class, 'show']);

Route::post('/students', [StudentController::class, 'store']);

Route::put('/students/{id}', [StudentController::class, 'update']);

Route::delete('/students/{id}', [StudentController::class, 'destroy']);

Route::get('/products/{id}', function ($id) {
    return 'Product ID: ' . $id;
})->whereNumber('id');


Route::get('/courses/{courseId}/students', [CourseController::class, 'students']);

Route::get('/students/{id}/edit', function ($id) {
    return 'Edit Student: ' . $id;
});