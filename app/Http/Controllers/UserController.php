<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::guard('sanctum')->user();

        if($user->isAbleTo(['users-read']))
        {
            return $this->sendResponse(User::all(), 'Successfully pulled all users.');
        }
        else
        {
            return $this->sendError('Unauthorised.');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::guard('sanctum')->user();

        if($user->isAbleTo(['users-create']))
        {
            $user = new User();
            $user->fill($request->toArray());
            $user->password = bcrypt(request('password'));

            $user->save();
            $user->attachRole($request->role);

            //$token = $user->createToken('ApiAuth')->plainTextToken;
            //['token' => $token],
            return $this->sendResponse($user, 'Successfully registered.');
        }
        else
        {
            return $this->sendError('Unauthorised.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $user = Auth::guard('sanctum')->user();

        if($user->isAbleTo(['users-read']))
        {
            $user = User::find($user);
            if($user === null)
            {
                return $this->sendError('Empty or does not exist.');
            }
            else
            {
                return $this->sendResponse(['user' => $user], 'User has been successfully pulled');

            }
        }
        else
        {
            return $this->sendError('Unauthorised.');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user_data = Auth::guard('sanctum')->user();
        
        if($user_data->isAbleTo(['users-update']))
        {
            $user->fill($request->toArray());
            $user->save();
            if($user_data->isAbleTo(['role-update']))
            {
                $rolls = explode(",",$request->role);
                if($rolls == !""){
                    $user->detachRoles($user->roles);
                }
                if(is_array($rolls)){
                    foreach($rolls as $rol){
                        $user->attachRole($rol);
                    }
                }
                else{
                    $user->attachRole($rolls);
                }
            }
            return $this->sendResponse([], 'User has been successfully updated');
        }
        else
        {
            return $this->sendError('Unauthorised.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user = Auth::guard('sanctum')->user();

        if($user->isAbleTo(['users-delete']))
        {
            User::destroy($user->id);

            return $this->sendResponse('Successfully deleted.');
        }
        else
        {
            return $this->sendError('Unauthorised.');
        }
    }
}
