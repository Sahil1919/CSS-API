<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\manageAuthController;
use App\Http\Controllers\userActionController;
use App\Http\Controllers\managerActionController;
use App\Http\Controllers\adminActionController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//User Authentication
Route::post('/auth/userLogin',[manageAuthController::class,"userLogin"]);
Route::post('/auth/userSignup',[manageAuthController::class,"userSignup"]);

//Manager Authentication
Route::post('/auth/mangerLogin',[manageAuthController::class,"mangerLogin"]);

//Admin Authentication
Route::post('/auth/adminLogin',[manageAuthController::class,"adminLogin"]);

//Common
Route::post('/auth/forgotPass',[manageAuthController::class,"forgotPass"]);
Route::post('/auth/changePass',[manageAuthController::class,"changePass"]);
Route::post('/auth/logout',[manageAuthController::class,"logout"]);
Route::post('/auth/updateInfo',[manageAuthController::class,"updateInfo"]);

Route::group(['middleware' => ['authenticate:user']], function() {
    //User Action
    Route::post('/action/user/raiseTicket',[userActionController::class,"raiseTicket"]);
    Route::post('/action/user/closeTicket',[userActionController::class,"closeTicket"]);
    Route::post('/action/user/reopenTicket',[userActionController::class,"reopenTicket"]);
    Route::post('/action/user/addReview',[userActionController::class,"addReview"]);
    Route::post('/action/user/addReply',[userActionController::class,"addReply"]);
    Route::get('/action/user/indexTickets',[userActionController::class,"indexTickets"]);
});

Route::group(['middleware' => ['authenticate:manager']], function() {
    //Manager Action
    Route::post('/action/manager/closeTicket',[managerActionController::class,"closeTicket"]);
    Route::post('/action/manager/transferManger',[managerActionController::class,"transferManger"]);
    Route::post('/action/manager/addManager',[managerActionController::class,"addManager"]);
    Route::post('/action/manager/addReply',[managerActionController::class,"addReply"]);
    Route::post('/action/manager/editTicket',[managerActionController::class,"editTicket"]);
    Route::get('/action/manager/indexTickets',[managerActionController::class,"indexTickets"]);
});

Route::group(['middleware' => ['authenticate:admin']], function() {
    //Admin Action
    Route::post('/action/admin/createCategory',[adminActionController::class,"createCategory"]);
    Route::post('/action/admin/addManager',[adminActionController::class,"addManager"]);
    Route::post('/action/admin/changePassword',[adminActionController::class,"changePassword"]);
    Route::post('/action/admin/addReply',[adminActionController::class,"addReply"]);
    Route::post('/action/admin/editTicket',[adminActionController::class,"editTicket"]);
    Route::post('/action/admin/addCampaign',[adminActionController::class,"addCampaign"]);
    Route::get('/action/admin/indexTickets',[adminActionController::class,"indexTickets"]);
});