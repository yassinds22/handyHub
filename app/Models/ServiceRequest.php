<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class ServiceRequest extends Model implements HasMedia
{use InteractsWithMedia;
    protected $fillable=[
        'service_id', 
        'description', 
        'province_id',
         'latitude', 'longitude',
          'execution_date', 
          'status',
           'user_id'
    ];


        public function province()
    {
        return $this->belongsTo(Province::class);
    }
    public function user()
{   
    return $this->belongsTo(User::class);
}
    //
}
