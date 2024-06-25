<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryOfProduct extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'category_id',
        'type_id',
        'name_uz',
        'name_ru',
        'name_en',
        'size',
        'manufacturer',
        'tonna_metr',
        'metr_tonna',
        'price',
        'photo',
    ];

    public function region()
    {
        return $this->belongsTo(Popular::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }


    public function order()
    {
        return $this->belongsTo(Order::class);
    }


    
}
