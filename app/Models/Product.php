<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function shops()
    {
        return $this->belongsToMany(Shop::class)->withPivot('price');
    }

    public function sales()
    {
        return $this->belongsToMany(Sale::class);
    }

    public function fridges()
    {
        return $this->belongsToMany(Fridge::class)->withPivot('units');
    }
}
