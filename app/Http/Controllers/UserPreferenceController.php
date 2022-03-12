<?php

namespace App\Http\Controllers;

use App\Models\UserPreference;
use Illuminate\Http\Request;

class UserPreferenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $UserPreference = UserPreference::create($request->except('_token'));
            //$this->images($request,$UserPreference);
            $data['data'] = $UserPreference;
            $data['message'] = 'created';
            return  $this->apiResponse($data,200);
        }catch(\Exception $e){
            $data['message'] = $e->getMessage();
            return  $this->apiResponse($data,404);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserPreference  $userPreference
     * @return \Illuminate\Http\Response
     */
    public function show(UserPreference $userPreference)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserPreference  $userPreference
     * @return \Illuminate\Http\Response
     */
    public function edit(UserPreference $userPreference)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserPreference  $userPreference
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserPreference $userPreference)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserPreference  $userPreference
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserPreference $userPreference)
    {
        //
    }
}