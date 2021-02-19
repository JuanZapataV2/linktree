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

}
