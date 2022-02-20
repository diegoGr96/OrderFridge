<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

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
