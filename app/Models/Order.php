<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'title',
        'price',
        'note',
        'tracking',
    ];

    public function orderitems() {
        
        return $this->hasMany(OrderItems::class) ;
    }

}
