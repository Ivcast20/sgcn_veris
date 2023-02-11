<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Level extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'value',
        'status',
        'bia_id'
    ];

    protected $casts = [
        'status' => 'boolean'
    ];

    protected function name(): Attribute
    {
        return Attribute::make(
            get: fn($name) => ucfirst(strtolower($name))
        );
    }

    public function bia()
    {
        return $this->belongsTo(BiaProcess::class,'bia_id','id');
    }
}
