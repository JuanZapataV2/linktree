<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Link;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $links = Link::ownedBy($user->id)->simplePaginate(5);
        $socials= DB::select('SELECT default_socials.*, socials.* FROM socials 
                                JOIN users ON users.id = socials.user_id 
                                JOIN default_socials ON default_socials.id = socials.social_id 
                                WHERE users.id ='. Auth::id());
        return view('home', compact('user','links','socials'));
    }
}
