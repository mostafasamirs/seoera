<?php

namespace App\Models;

use App\Models\User;
use App\Models\Producer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Touch extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'massage',
        'product',
        'user',
    ];
    //scopeSearch
    public function scopeSearch($query, $search)
    {
        return $query
            ->where('name', 'like', "%" . $search . "%")
            ->orWhere('phone', 'like', "%" . $search . "%")
            ->orWhere('massage', 'like', "%" . $search . "%")->latest();
    }

    protected function product(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => decrypt($value),
        );
    }

    protected function user(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => decrypt($value),
        );
    }

    public function products()
    {
        return $this->belongsTo(Producer::class, 'product', 'id');
    }
    public function users()
    {
        return $this->belongsTo(User::class, 'user', 'id');
    }
}
