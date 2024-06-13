<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $fillable =[
        'order_id',
        'user_id'
    ];
    use HasFactory;

    public function products()
    {
        return $this->belongsToMany(Products::class)
                    ->withPivot('total_quantity', 'total_price');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
