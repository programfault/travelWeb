<?php

use Illuminate\Support\Facades\Route;
use App\Models\UserSetMenu;
Route::prefix('pay')->group(function () {
    Route::get('alipay', [\App\Http\Controllers\PayController::class,'index']);
    Route::get('return', [\App\Http\Controllers\PayController::class,'return']);
    Route::get('notify', [\App\Http\Controllers\PayController::class,'notify']);
});

Route::get('/', function () {
    return view('welcome');
});
Route::get("/list/{website}", function($website){
    $setMenus = DB::table("user_set_menu")->orderBy("id")->where("website",$website)->get();
    return response()->json($setMenus);
});

Route::get("/details/{menu}", function(UserSetMenu $menu){
    return response()->json($menu);
});

Route::get("/config/{website}", function($website){
    $setMenus = DB::table("website_config")->orderBy("id")->where("domain",$website)->get();
    return response()->json($setMenus);
});
