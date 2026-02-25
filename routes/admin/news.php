<?php

use App\Http\Controllers\Admin\News\NewsTypeController;
use Illuminate\Support\Facades\Route;

Route::group(["middleware" => "manager", "prefix" => "admin/news/type"], function(){
    Route::get("list", [NewsTypeController::class, "list"]);
    Route::get("add", [NewsTypeController::class, "add"]);
});