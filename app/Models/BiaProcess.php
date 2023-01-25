<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiaProcess extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'alcance',
        'estado_id',
        'status',
        'fecha_inicio'
    ];

    protected $casts = [
        'status' => 'boolean'
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class,'bia_process_product','bia_id','product_id');
    }
}
