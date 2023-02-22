<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'total_score',
        'is_critical',
        'justificacion',
        'mtpd',
        'rto',
        'rpo',
        'aceptable_minimun',
        'priority',
        'other_proc_depen',
        'processes',
        'criticial_periods',
        'procedure',
        'normal_op_people',
        'people_required',
        'applications',
        'equiptment',
        'services',
        'physical_space',
        'people',
        'skills',
        'providers',
        'other_resources',
        'critic_product_id',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
        'is_critial' => 'boolean',
        'other_proc_depen' => 'boolean'
    ];

    public function parameter_scores()
    {
        return $this->hasMany(ActivityParameterScore::class, 'activity_id', 'id');
    }

    public function criticproduct() : BelongsTo
    {
        return $this->belongsTo(ProductScoreAverage::class, 'critic_product_id');
    }
}
