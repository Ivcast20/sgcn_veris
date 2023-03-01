<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Risk extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'description',
        'consecuences',
        'risk_owner_id',
        'existing_controls',
        'probability',
        'impact',
        'risk_level',
        'is_aceptable',
        'treatment_option_id',
        'treatment_plan',
        'responsable',
        'resources',
        'start_date',
        'end_date',
        'status_id',
        'status'
    ];

    protected $casts = [
        'is_aceptable' => 'boolean',
        'status' => 'boolean'
    ];

    public function department()
    {
        return $this->belongsTo(Department::class, 'risk_owner_id', 'id');
    }

    public function treatment_option()
    {
        return $this->belongsTo(TreatmentOption::class, 'treatment_option_id', 'id');
    }

    public function treatment_status()
    {
        return $this->belongsTo(StatusRisk::class, 'status_id', 'id');
    }

    public function causes()
    {
        return $this->belongsToMany(Cause::class,'cause_risk','risk_id', 'cause_id');
    }

    public function sources()
    {
        return $this->belongsToMany(Source::class,'risk_source','risk_id','source_id');
    }
}
