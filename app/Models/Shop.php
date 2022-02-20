<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Shop extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'logo',
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('price');
    }

    public function sales()
    {
        return $this->hasMany(Sale::class);
    }
}
