<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'first_name',
        'last_name',
        'county',
        'city',
        'zip',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function adverts()
    {
        return $this->hasMany(Advert::class ,'user_id') ->orderBy('updated_at','desc');
    }

    public function messages(){
        return $this->hasMany(Message::class, 'to');
    }

    public function getUnread(){
        $count = $this->messages()->where('read',0)->get();
        return $count->count();
    }
}
