<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Traits\ApiResponser;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //use this method to login users
    public function login(Request $request)
    {   
        $data = [
            'email'     => $request->email,
            'password'  => $request->password
        ];
 
        if (Auth::attempt($data)) {
            $token = Auth::user()->createToken('ApiAuth')->accessToken;

            return $this->sendResponse(['token' => $token], 'Successfully logged in.');
        }
        else {
            if (!User::where('email', '=', $data['email'])->exists()) {
                return $this->sendError('Unauthorised.', ['error' => 'Email does not exist']);
             }
             else
             {
                return $this->sendError('Unauthorised.', ['error' => 'Password does not match with the given email']);
             }
        }
    }

    // this method signs out users by removing tokens
    public function logout()
    {
        $user = Auth::user()->token();
        $user->revoke(); // Revoke the token.
        //$user->delete(); // Delete the token from the database.
        return $this->sendResponse([], 'Successfully logged out.');
    }
}