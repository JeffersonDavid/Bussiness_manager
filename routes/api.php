<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Resources\UserResource;
use App\Models\User;
use Nette\Utils\Json;
use Illuminate\Support\Facades\DB;

use App\Models;
use App\Models\Company;
use App\Events\TestEvent;


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

/*
Route::get('/dashboarding', function () {

    $active_users = User::where('active', 1)->count();
    $inactive_users = User::where('active', 0)->count();
    $total_users = DB::table('users')->count();
    return response()->json([
         'active_users'=> $active_users,
         'inactive_users'=>$inactive_users,
         'total_users'=>$total_users
    ]);

})->middleware(['auth', 'verified'])->name('dashboarding');
*/

Route::middleware('auth:sanctum')->get('/dashboarding', function (Request $request) {
    $active_users = User::where('active', 1)->count();
    $inactive_users = User::where('active', 0)->count();
    $total_users = DB::table('users')->count();
    return response()->json([
         'active_users'=> $active_users,
         'inactive_users'=>$inactive_users,
         'total_users'=>$total_users
    ]);

});


Route::post('/tokens/create', function (Request $request) {
    $user = User::find(101);
    $token = $user->createToken('token', ['server:update'])->plainTextToken;
    return response()->json([
        'token'=>$token
   ]);
});

Route::post('/eventest', function (Request $request) {

    $company = Company::create(['name' => 'Facebook',
    'email'=>'ss@32jkdsjsj2332.com','description'=>'test','active'=>1]);

    logger('Disparando evento');
    event(new TestEvent($company));





   return response()->json([
    'status'=>'puesto en cola'
]);




});


