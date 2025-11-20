<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable=['name'];

     public function workers()
    {
        return $this->hasMany(Worker::class, 'service_id');
    }

    // 📋 العلاقة مع طلبات الخدمة
    public function serviceRequests()
    {
        return $this->hasMany(ServiceRequest::class, 'service_id');
    }

    // 🏷️ العلاقة مع الخدمة الأم (للتخصصات الفرعية)
    public function parent()
    {
        return $this->belongsTo(Service::class, 'parent_id');
    }

    // 🏷️ العلاقة مع التخصصات الفرعية
    public function children()
    {
        return $this->hasMany(Service::class, 'parent_id');
    }

    // 🎯 نطاق للخدمات النشطة
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    // 🎯 نطاق للخدمات الرئيسية (بدون parent)
    public function scopeMainServices($query)
    {
        return $query->whereNull('parent_id');
    }

    // 🔢 عدد الحرفيين في هذه الخدمة
    public function getWorkersCountAttribute()
    {
        return $this->workers()->count();
    }
    //
}
