<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $filable =[
        'name',
        'image',
        'description',
        'price'
    ];

    use HasFactory;

    public function orders()
    {
        return $this->belongsToMany(Orders::class)
                    ->withPivot('total_quantity', 'total_price');
    }

    public function price(): Attribute
    {
        return Attribute::make(
            get: fn($value) => str_replace('.', ',', $value) . ' $'
        );
    }
}
