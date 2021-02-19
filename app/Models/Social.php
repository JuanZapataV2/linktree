<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\DefaultSocial;
class Social extends Model
{
    use HasFactory;

    protected $fillable = [
        'url','user_id','social_id'
    ];

    public function scopeOwnedBy($query, $user_id)
    {
        return $query->where('user_id', '=', $user_id);
    }

    public function scopeDefaultSocial($query, $social_id)
    {
        return $query->where('social_id', '=', $social_id);
    }
    
    public function owner(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public static function searchSocial ($social){
        $query = DB::select('SELECT default_socials.*, socials.* FROM socials 
                            JOIN users ON users.id = socials.user_id 
                            JOIN default_socials ON default_socials.id = socials.social_id
                            WHERE socials.id =:id', ['id' => $social->id]);
        return $query;
    }

    public static function searchSocials(){
        $query = DB::select('SELECT default_socials.*, socials.* FROM socials 
                            JOIN users ON users.id = socials.user_id 
                            JOIN default_socials ON default_socials.id = socials.social_id');
        return $query;
    }

}
