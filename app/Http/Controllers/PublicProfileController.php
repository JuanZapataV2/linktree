<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Link;

class PublicProfileController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $email = $request->email;
        $users = DB::select('SELECT users.* FROM users WHERE users.email = :email', ['email' => $email]);
        foreach($users as $user){
            $links = Link::ownedBy($user->id)->simplePaginate(5);
            $socials= DB::select('SELECT default_socials.*, socials.* FROM socials 
                                 JOIN users ON users.id = socials.user_id 
                                 JOIN default_socials ON default_socials.id = socials.social_id 
                                 WHERE users.id = :id', ['id' => $user->id]);
            return view('home', compact('user','links','socials'));
        }
        if(!$users){
            return view ('user.not_found');
        }
    }
}
