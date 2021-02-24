<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DefaultSocial;

class DefaultSocial extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'image'
    ];


    public function socials(){
        return $this->hasMany(DefaultSocial::class);
    }
    
    public function scopeOwnedBy($query, $socials_id)
    {
        return $query->whereId($social_id);;
    }

}
