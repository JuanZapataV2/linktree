<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;
use App\Http\Requests\SocialRequest;
use App\Models\Social;
use App\Models\DefaultSocial;


class SocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $query="";
        // $total = new Social();
        // $socials = new DefaultSocial();
        // $user = Auth::user();
        // $total->ownedBy(Auth::id());
        // $socials->scopeOwnedBy($query,$total);
        // return view('social.index', compact('user','socials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('social.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SocialRequest $request)
    {
        $social = new Social();
        $social->social_id = $request->input('social_selec');
        $social->url = $request->input('url');
        $social->user_id = Auth::id();
        $social->save();

        return redirect(route('profile.index'))->with('_success', 'Enlace creado exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Social $social)
    {
        return view('social.edit', compact('social'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SocialRequest $request, Social $social)
    {
        $social->social_id = $request->input('social_selec');
        $social->url = $request->input('url');
        $social->user_id = Auth::id();
        $social->save();

        return redirect(route('profile.index'))->with('_success', '¡Enlace editado exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Social $social)
    {
        if($social->owner->id == Auth::id()){
            $social->delete();
            return back()->with('_success','Enlace borrado correctamente!');
        } else {
            return back()->with('_failure','No se ha podido borrar el enlace');
        }
    }
}
