<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParameterScore extends Model
{
    use HasFactory;

    protected $fillable = [
        'parameter_id',
        'product_score_id',
        'score'
    ];

    public function parameter()
    {
        return $this->belongsTo(Parameter::class,'parameter_id','id');
    }

    public function productScore()
    {
        return $this->belongsTo(ProductScore::class,'product_score_id','id');
    }
}
