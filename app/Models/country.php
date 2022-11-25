<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class country extends Model
{
    use HasFactory;
    protected $fillable=[
        'name_',
        'continent_name'
    ];
    protected $primaryKey = 'code';
}
