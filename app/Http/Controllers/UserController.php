<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use Image;
use App\Models\Social;
use App\Models\DefaultSocial;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $user=Auth::user();
        $socials= DB::select('SELECT default_socials.*, socials.* FROM socials 
                            JOIN users ON users.id = socials.user_id 
                            JOIN default_socials ON default_socials.id = socials.social_id 
                            WHERE users.id ='. Auth::id());

        return view('social.index', compact('user','socials'));
    }

    public function update_avatar(Request $request){
        //Subir la foto que el usuario eligió
        if ($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save(public_path('uploads/avatars/'.$filename));
            $user = Auth::user();
            $user->avatar=$filename;
            $user->save();
            return redirect(route('profile.index'))->with('_success', '¡Avatar  actualizado exitosamente!');
        }
    }

    public function update_bg(Request $request){
        //Subir la foto que el usuario eligió
        if ($request->hasFile('background')){
            $background = $request->file('background');
            $filename = time() . '.' . $background->getClientOriginalExtension();
            Image::make($background)->save(public_path('uploads/backgrounds/'.$filename));
            $user = Auth::user();
            $user->background=$filename;
            $user->save();
            return redirect(route('home'))->with('_success', '¡Fondo actualizado exitosamente!');
        }
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user = Auth::user();
        return view('user.show_profile', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
