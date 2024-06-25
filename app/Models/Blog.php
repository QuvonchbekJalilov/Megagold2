<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blogs';

    protected $fillable = [
      'title_uz',
      'title_ru',
      'title_en',
      'short_content_uz',
      'short_content_ru',
      'short_content_en',
      'content_uz',
      'content_ru',
      'content_en',
      'description_uz',
      'description_ru',
      'description_en',
      'photo',
    ];
}
