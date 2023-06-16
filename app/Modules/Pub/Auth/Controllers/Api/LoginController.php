<?php

namespace App\Modules\Pub\Auth\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function login(Request $request) {

        var_dump($request->all());
        exit('ku');

        /*$credentials = request(['name','password']);

        if(!Auth::attempt($credentials)) {
            return ResponseServise::sendJsonResponse(
                false,
                403,
                ['message' => __('auth.login_error')]
            );
        }

        $user = $request->user();

        $tokenResult = $user->createToken('Personal Access Token');

        return ResponseServise::sendJsonResponse(
            true,
            200,
            [],
            [
                'api_token' => $tokenResult->accessToken,
                'user' => $user,
                'token_type' => 'Bearer',
                'expires_at' => Carbon::parse($tokenResult->token->expires_at)->toDateTimeString(),
            ]
        );*/
    }
}
