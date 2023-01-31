<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Criteria extends Model
{
    use HasFactory;

    protected $fillable = [
        'bia_id',
        'level_id',
        'parameter_id',
        'status'
    ];

    protected $casts = [
        'status' => 'boolean'
    ];
}
