<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActiveClient extends Model
{
    use HasFactory;

    protected $table = 'active_clients';

    protected $fillable = [
        'active_client',
        'experienced',
        'years_services'
    ];
}
