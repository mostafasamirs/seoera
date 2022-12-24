<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'image',
        'language_id',
        'address',
        'created_by',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function languages()
    {
        return $this->belongsTo(Language::class, 'language_id', 'id');
    }

    //scopeSearch
    public function scopeSearch($query, $search)
    {
        return $query
            ->where('name', 'like', "%" . $search . "%")
            ->orWhere('address', 'like', "%" . $search . "%")
            ->orWhere('phone', 'like', "%" . $search . "%")
            ->orWhere('created_by', 'like', "%" . $search . "%")
            ->orderBy('email', 'desc')->latest();
    }
}
