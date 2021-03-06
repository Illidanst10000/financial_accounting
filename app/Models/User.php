<?php

namespace App\Models;

use App\Notifications\SenvVerifyWithQueueNotification;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    const ROLE_USER = 1;
    const ROLE_ADMIN = 2;

    public static function getRoles() {
        return [
            self::ROLE_USER => 'User',
            self::ROLE_ADMIN => 'Admin',
        ];
    }


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function sendEmailVerificationNotification()
    {
        $this->notify(new SenvVerifyWithQueueNotification());
    }

    public function earnings() {
        return $this->belongsToMany(Earning::class, 'user_earning');
    }

    public function spendings() {
        return $this->belongsToMany(Spending::class, 'user_spending');
    }
}
