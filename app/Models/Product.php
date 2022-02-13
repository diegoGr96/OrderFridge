<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'pvp',
    ];

    public function shops()
    {
        return $this->belongsToMany(Shop::class);
    }

    public function sales()
    {
        return $this->belongsToMany(Sale::class);
    }
}
