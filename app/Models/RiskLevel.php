<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiskLevel extends Model
{
    use HasFactory;

    protected $fillable = [
        'range',
        'clasification',
        'description',
        'status'
    ];

    protected $casts = [
        'status' => 'boolean'
    ];
}
