<?php

namespace App\Models;

use App\Models\User;
use App\Models\Producer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Language extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'image',
        'slogan',
    ];
    public function users()
    {
        return $this->hasMany(User::class, 'id', 'language_id');
    }
    public function producers()
    {
        return $this->hasMany(Producer::class, 'id', 'language_id');
    }
    //scopeSearch
    public function scopeSearch($query, $search)
    {
        return $query
            ->where('title', 'like', "%" . $search . "%")
            ->orderBy('slogan', 'desc')->latest();
    }
}
