<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductScore extends Model
{
    use HasFactory;

    protected $fillable = [
        'bia_id',
        'user_id',
        'product_id',
        'total_score'
    ];

    public function bia()
    {
        return $this->belongsTo(BiaProcess::class,'bia_id','id');
    }

    public function parameterScores()
    {
        return $this->hasMany(ParameterScore::class,'product_score_id','id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class,'product_id','id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
