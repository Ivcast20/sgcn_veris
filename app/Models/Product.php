<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status',
        'category_id'
    ];

    protected $casts = [
        'status' => 'boolean'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function bias()
    {
        return $this->belongsToMany(BiaProcess::class,'bia_process_product','bia_id','product_id');
    }

}