<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiaEstado extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function bias()
    {
        return $this->hasMany(BiaProcess::class, 'estado_id', 'id');
    }
}
