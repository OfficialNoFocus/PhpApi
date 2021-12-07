<?php

namespace App\Http\Controllers;

use App\Models\Wine;
use Illuminate\Http\Request;
use App\Http\Requests\WineRequest;
use Illuminate\Support\Facades\Auth;


class WineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::guard('sanctum')->user();

        if($user->isAbleTo(['wine-read']))
        {
            return $this->sendResponse(Wine::all(), 'Successfully pulled all wines.');
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
    public function store(WineRequest $request)
    {
        $user = Auth::guard('sanctum')->user();

        if($user->isAbleTo(['wine-create']))
        {
            $wine = new Wine();
            $wine->fill($request->toArray());
            $wine->save();

            return $this->sendResponse($wine, 'Successfully created a wine.');
        }
        else
        {
            return $this->sendError('Unauthorised.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wine  $wine
     * @return \Illuminate\Http\Response
     */
    public function show(Wine $wine)
    {
        $user = Auth::guard('sanctum')->user();

        if($user->isAbleTo(['wine-read']))
        {
            return $this->sendResponse($wine, 'Successfully pulled a wine.');
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
     * @param  \App\Models\Wine  $wine
     * @return \Illuminate\Http\Response
     */
    public function update(WineRequest $request, Wine $wine)
    {   
        $user = Auth::guard('sanctum')->user();
        
        if($user->isAbleTo(['wine-update']))
        {
            $wine->fill($request->toArray());
            $wine->save();
            return $this->sendResponse($wine, 'Wine has been successfully updated');
        }
        else
        {
            return $this->sendError('Unauthorised.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wine  $wine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wine $wine)
    {
        $user = Auth::guard('sanctum')->user();

        if($user->isAbleTo(['wine-delete']))
        {
            Wine::destroy($wine->id);

            return $this->sendResponse('Successfully deleted.');
        }
        else
        {
            return $this->sendError('Unauthorised.');
        }
    }
}
