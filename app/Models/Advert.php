<?php

namespace App\Models;

use DateTime;
use EloquentFilter\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advert extends Model
{
    use HasFactory, Filterable;

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'image',
        'console_type',
        'county',
        'city',
        'shelfed',
        'advert_type',
        'price',
        'package',
        'condition',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    

    public function modelFilter()
    {
        return $this->provideFilter(\App\ModelFilters\AdvertFilter::class);
    }
}
