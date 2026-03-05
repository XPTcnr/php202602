<?php

use App\Http\Controllers\Admin\About\AboutEventController;
use Illuminate\Support\Facades\Route;

Route::group(["middleware" => "manager", "prefix" => "admin/about"], function(){
    Route::group(["prefix" => "event"], function(){
        Route::get("list", [AboutEventController::class, "list"]);
        Route::get("add", [AboutEventController::class, "add"]);
        Route::post("add", [AboutEventController::class, "insert"]);
        Route::get("edit/{id}", [AboutEventController::class, "edit"]);
        Route::post("edit", [AboutEventController::class, "update"]);
        Route::post("delete", [AboutEventController::class, "delete"]);
    });
});