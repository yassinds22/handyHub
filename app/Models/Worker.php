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
        return $this->belongsTo(Province::class, 'province_id');
    }

    // 📍 العلاقة مع المديرية (District) - أيضاً من جدول provinces لكن كمديرية
    public function district()
    {
        return $this->belongsTo(Province::class, 'district_id');
    }

    // 🔧 العلاقة مع الخدمة (Service)
    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }

    // 👤 العلاقة مع المستخدم (User)
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // 📋 العلاقة مع طلبات الخدمة (Service Requests)
    public function serviceRequests()
    {
        return $this->hasMany(ServiceRequest::class, 'worker_id');
    }
    //
}
