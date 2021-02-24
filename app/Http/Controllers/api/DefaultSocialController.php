<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\DefaultSocial;
use Illuminate\Http\Request;
use App\Http\Requests\DefaultSocialRequest;

class DefaultSocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $defaultSocial = DefaultSocial::orderBy('name', 'asc')->get();
        return response()->json(['data' => $defaultSocial], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DefaultSocialRequest $request)
    {
        $defaultSocial = DefaultSocial::create($request->all());
        return response()->json(['data' => $defaultSocial], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DefaultSocial  $defaultSocial
     * @return \Illuminate\Http\Response
     */
    public function show(DefaultSocial $defaultSocial)
    {
        return response()->json(['data' => $defaultSocial], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DefaultSocial  $defaultSocial
     * @return \Illuminate\Http\Response
     */
    public function update(DefaultSocialRequest $request, DefaultSocial $defaultSocial)
    {
        $defaultSocial->update($request->all());
        return response()->json(['data' => $defaultSocial], 200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DefaultSocial  $defaultSocial
     * @return \Illuminate\Http\Response
     */
    public function destroy(DefaultSocial $defaultSocial)
    {
        $defaultSocial->delete();
        return response(null, 204);
    }
}
