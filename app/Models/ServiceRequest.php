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






/////////////////////////////
public function client()
    {
        return $this->belongsTo(User::class, 'client_id');
    }

    //  العلاقة مع الحرفي
    public function worker()
    {
        return $this->belongsTo(Worker::class, 'worker_id');
    }

    //  العلاقة مع الخدمة
    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }

    //  العلاقة مع المحافظة
    public function province()
    {
        return $this->belongsTo(Province::class, 'province_id');
    }

    //  العلاقة مع المديرية
    public function district()
    {
        return $this->belongsTo(Province::class, 'district_id');
    }

   

  

  

  
    //
}
