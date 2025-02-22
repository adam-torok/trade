<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Box extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'advert_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function advert(){
        return $this->belongsToMany(Advert::class,'advert_id');
    }
    
}
