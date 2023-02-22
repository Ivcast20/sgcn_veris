<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TreatmentOption extends Model
{
    use HasFactory;

    protected $fillable = [
        'strategy',
        'description',
        'status'
    ];

    protected $casts = [
        'status' => 'boolean'
    ];
}
