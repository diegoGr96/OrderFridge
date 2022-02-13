<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

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
