<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'application_id',
        'name',
        'phone',
        'password',
        'otp',
        'remember_token'
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

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? null, function ($query, $search) {
            $query->where('name', 'like', '%' . $search . '%')
                ->orWhere('phone', 'like', '%' . $search . '%');
        })->when($filters['name'] ?? null, function ($query, $name) {
            $query->where('name', 'like', '%' . $name . '%');
        })->when($filters['phone'] ?? null, function ($query, $phone) {
            $query->where('phone', 'like', '%' . $phone . '%');
        })->when(($filters['from'] ?? null) && ($filters['to'] ?? null), function ($query) {
            $query->whereDate('created_at', '>=', request('from'))
                ->whereDate('created_at', '<=', request('to'));
        });
    }

    public function scopeFilterRole($query, array $filters)
    {
        $query->when($filters['super'] ?? null, function ($query, $super) {
            if ($super === 'with') {
                $query->whereDoesntHave('roles')->orWhereHas('roles', function ($q) {
                    $q->where('is_super', 1)->orWhere('is_super', 0);
                });
            } else if ($super === 'only') {
                $query->whereHas('roles', function ($q) {
                    $q->where('is_super', 1);
                });
            } else {
                $query->whereHas('roles', function ($q) {
                    $q->where('is_super', 0);
                });
            }
        }, function ($query) {
            $query->whereDoesntHave('roles')->orWhereHas('roles', function ($q) {
                $q->where('is_super', 0);
            });
        });
    }

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
