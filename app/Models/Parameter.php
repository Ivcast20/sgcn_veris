<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parameter extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status',
        'bia_id'
    ];

    protected $casts = [
        'status' => 'boolean'
    ];

    public function bia()
    {
        return $this->belongsTo(BiaProcess::class,'bia_id','id');
    }
}
