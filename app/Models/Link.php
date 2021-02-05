<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
//use C:\code\linktree-app\database\migrations\users;

class Link extends Model
{
    use HasFactory;

    protected $fillable = [
        'label',
        'url',
    ];

    public function owner(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
