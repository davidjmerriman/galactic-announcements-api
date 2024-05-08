<?php

use App\Http\Controllers\AnnouncementController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/announcements', function (AnnouncementController $announcementController) {
    return $announcementController->index();
});

Route::get('/announcements/{id}', function (AnnouncementController $announcementController, int $id) {
    return $announcementController->get($id);
});
