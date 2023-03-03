<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ViewLogApp extends Model
{
    use HasFactory;

    protected $table = 'view_log_app';

    protected $fillable = [
        'name',
        'last_name',
        'accion',
        'auditable_type',
        'url',
        'dispositivo',
        'antes',
        'despues',
        'fecha_accion',
    ];
}
