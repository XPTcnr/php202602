<?php

use App\Http\Controllers\Front\AboutController;
use Illuminate\Support\Facades\Route;
// 關於我們
Route::get("/about", [AboutController::class, "index"]);