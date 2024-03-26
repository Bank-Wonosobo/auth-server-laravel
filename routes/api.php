<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

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

Route::middleware(['auth:api'])->get('/current', function (Request $request) {
    $user = Auth::user();

    //  $token->addClaim('my-claim', 'my custom claim data');
    // $user = User::find($token->getUserIdentifier());

    $role = [];
    foreach ($user->roles as $value) {
        $role[] = $value->name;
    }

    $permissions = [];
    foreach($user->getAllPermissions() as $value) {
        $permissions[] = $value->name;
    }

    $userToken = [
        "id" => $user->id,
        "name" => $user->name,
        'email' => $user->email,
        "roles" => $role,
        "permissions" => $permissions
    ];
    return response()->json([
        $userToken
    ]);
});

Route::post('/login', function(Request $request) {
    $validator = Validator::make($request->all(), [
        'email' => 'required|email',
        'password' => 'required'
    ]);

    if ($validator->fails()) {
        return response()->json($validator->errors(), 400);
    }

    $user = User::where('email', $request->email)->first();

    if (!$user || !Hash::check($request->password, $user->password)) {
        return response()->json([
            'success' => false,
            'message' => 'Login Failed!',
        ]);
    }

    return response()->json([
        'success' => true,
        'message' => 'Login Success!',
        'data'    => $user,
        'token'   => $user->createToken('authToken')->accessToken
    ]);

});

Route::get('/logout', function(Request $request) {
    $token = $request->user()->token();
    $token->revoke();
    $response = ['message' => 'You have been successfully logged out!'];
    return response($response, 200);
});
