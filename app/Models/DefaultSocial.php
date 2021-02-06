<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Social;

class DefaultSocial extends Model
{
    use HasFactory;

    public function socials(){
        return $this->hasMany(Social::class);
    }
    
    public function scopeOwnedBy($query, $socials_id)
    {
        return $query->whereId($social_id);;
    }

}
