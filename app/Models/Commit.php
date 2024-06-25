<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commit extends Model
{
    use HasFactory;

    protected $table = 'commits';


    protected $fillable = [
      'name',
      'title_uz',
      'title_ru',
      'title_en',
      'photo',
    ];
}
