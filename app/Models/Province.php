<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
        use HasFactory;

    protected $fillable = ['name', 'parent_id'];


    /**
     * العلاقة مع المحافظات الفرعية
     */
 public function parent()
    {
        return $this->belongsTo(Province::class, 'parent_id');
    }

    // 🏘️ العلاقة مع المديريات التابعة (للمحافظات)
    public function districts()
    {
        return $this->hasMany(Province::class, 'parent_id');
    }

    // 👷 الحرفيين في هذه المحافظة
    public function workers()
    {
        return $this->hasMany(Worker::class, 'province_id');
    }

    // 👷 الحرفيين في هذه المديرية
    public function districtWorkers()
    {
        return $this->hasMany(Worker::class, 'district_id');
    }

    // 📋 طلبات الخدمة في هذه المحافظة
    public function serviceRequests()
    {
        return $this->hasMany(ServiceRequest::class, 'province_id');
    }

    // 🎯 نطاق للمحافظات الرئيسية (التي ليس لها parent)
    public function scopeMainProvinces($query)
    {
        return $query->where('parent_id', 0)->orWhereNull('parent_id');
    }

    // 🎯 نطاق للمديريات (التي لها parent)
    public function scopeDistricts($query)
    {
        return $query->whereNotNull('parent_id')->where('parent_id', '!=', 0);
    }

    // 🎯 نطاق للنشطة فقط
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    // 🔢 عدد الحرفيين في المحافظة
    public function getWorkersCountAttribute()
    {
        return $this->workers()->count() + $this->districtWorkers()->count();
    }
    //
}
