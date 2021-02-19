<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Social;
use Illuminate\Http\Request;
use App\Http\Requests\SocialRequest;
use App\Models\DefaultSocial;
use Illuminate\Support\Facades\DB;
class SocialNetworkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $socials=Social::searchSocials();
        return response()->json(['data' => $socials], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SocialRequest $request)
    {
        $social = Social::create($request->all());
        return response()->json(['data' => $social], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Social  $social
     * @return \Illuminate\Http\Response
     */
    public function show(Social $social)
    {
        $social= Social::searchSocial($social);
        return response()->json(['data' => $social], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Social  $social
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Social $social)
    {
        $social->update($request->all());
        $social= Social::searchSocial($social);
        return response()->json(['data' => $social], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Social  $social
     * @return \Illuminate\Http\Response
     */
    public function destroy(Social $social)
    {
        $social->delete();
        return response(null, 204);
    }
}
