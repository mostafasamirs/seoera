<?php

namespace App\Models;

use App\Models\Language;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Producer extends Model
{
    use HasFactory;
    protected $table = 'products';

    protected $fillable = [
        'name',
        'description',
        'image',
        'salary',
        'language_id',
        'discount',
        'public_unpublic',
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
            ->orWhere('salary', 'like', "%" . $search . "%")
            ->orderBy('discount', 'desc')->latest();
    }
}
