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

    public function bia()
    {
        return $this->belongsTo(BiaProcess::class, 'bia_id', 'id');
    }

    public function level()
    {
        return $this->belongsTo(Level::class, 'level_id', 'id');
    }

    public function parameter()
    {
        return $this->belongsTo(Parameter::class, 'parameter_id', 'id');
    }
}
