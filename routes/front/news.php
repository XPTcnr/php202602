<?php

use App\Http\Controllers\Front\NewsController;
use Illuminate\Support\Facades\Route;

Route::group(["prefix" => "news"], function(){
    // 最新消息列表
    Route::get("/", [NewsController::class, "list"]);
    // 利用ajax最得最新消息(依類別)
    Route::get("getList", [NewsController::class, "getList"]);
    // 依id取得詳細資料
    Route::get("detail/{id}", [NewsController::class, "detail"]);
});