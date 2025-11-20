<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasApiTokens, HasFactory, Notifiable;




   

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'google_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }


public function workerProfile()
    {
        return $this->hasOne(Worker::class, 'user_id');
    }

    //  العلاقة مع طلبات الخدمة كعميل
    public function serviceRequests()
    {
        return $this->hasMany(ServiceRequest::class, 'client_id');
    }

   

    //  نطاق للحرفيين فقط
    public function scopeWorkers($query)
    {
        return $query->where('user_type', 'worker');
    }

    // 🎯 نطاق للعملاء فقط
    public function scopeClients($query)
    {
        return $query->where('user_type', 'client');
    }

  

  



}
