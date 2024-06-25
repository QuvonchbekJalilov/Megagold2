<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'name',
        'phone_number',
        'total_price',        
        'total_length',
        'total_weight',
        'status'
    ];

    public function product()
    {
        return $this->belongsTo(CategoryOfProduct::class, 'product_id');
    }
}
