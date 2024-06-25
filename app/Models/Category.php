<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
      'name_uz',
      'name_ru',
      'name_en',
      'photo',
    ];


    public function products()
    {
        return $this->hasMany(CategoryOfProduct::class, 'category_id');
    }
    

}
