<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImpactLevel extends Model
{
    use HasFactory;

    protected $fillable = [
        'value',
        'clasification',
        'description',
        'status'
    ];

    protected $casts = [
        'status' => 'boolean'
    ];
}
