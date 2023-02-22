<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityParameterScore extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'score',
        'parameter_id',
        'activity_id',
    ];

    public function activity()
    {
        return $this->belongsTo(Activity::class, 'activity_id', 'id');
    }

    public function parameter()
    {
        return $this->belongsTo(Parameter::class, 'parameter_id', 'id');
    }
}
