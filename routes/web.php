<?php

use Illuminate\Support\Facades\Route;
use App\Models\UserSetMenu;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
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
