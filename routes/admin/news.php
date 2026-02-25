<?php

use App\Http\Controllers\Admin\News\NewsTypeController;
use Illuminate\Support\Facades\Route;

Route::group(["middleware" => "manager", "prefix" => "admin/news/type"], function(){
    Route::get("list", [NewsTypeController::class, "list"]);
    Route::get("add", [NewsTypeController::class, "add"]);
    Route::post("add", [NewsTypeController::class, "insert"]);
    Route::get("edit/{id}", [NewsTypeController::class, "edit"]);
    Route::post("edit", [NewsTypeController::class, "update"]);
    Route::post("delete", [NewsTypeController::class, "delete"]);
});