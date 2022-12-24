<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Setting extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'title',
        'description',
        'email',
        'phone',
        'location',
        'logo',
        'icon',
        'link',
        'facebook',
    ];
    //scopeSearch
    public function scopeSearch($query, $search)
    {
        return $query
            ->where('title', 'like', "%" . $search . "%")
            ->orWhere('phone', 'like', "%" . $search . "%")
            ->orderBy('email', 'desc')->latest();
    }
}
