<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $table = 'abouts';

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
      'photo',
    ];
}
