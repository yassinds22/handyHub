<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Worker extends Model implements HasMedia
{use InteractsWithMedia;

    protected $fillable=[
        'user_id',
         'service_id',
          'experience_years',
           'bio', 'province_id',
            'latitude', 
            'longitude',
             'execution_date', 
             'status'
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
