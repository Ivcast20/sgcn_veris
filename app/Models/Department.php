<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'status'
    ];

    protected $casts = [
        'status' => 'boolean'
    ];

    protected function createdAt(): Attribute
    {
        return Attribute::make(
            get: fn($fecha) => Carbon::createFromFormat('Y-m-d H:i:s',$fecha)->format('d/m/Y'),
        );
    }

    protected function updatedAt(): Attribute
    {
        return Attribute::make(
            get: fn($fecha) => Carbon::createFromFormat('Y-m-d H:i:s',$fecha)->format('d/m/Y'),
        );
    }
}
