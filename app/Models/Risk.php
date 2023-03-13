<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Risk extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

    protected $fillable = [
        'bia_id',
        'code',
        'description',
        'source_id',
        'consecuences',
        // 'risk_owner_id',
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

    public function bia()
    {
        return $this->belongsTo(BiaProcess::class, 'bia_id', 'id');
    }

    public function departments()
    {
        return $this->belongsToMany(Department::class, 'department_risk', 'risk_id', 'department_id');
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

    public function source()
    {
        return $this->belongsTo(Source::class, 'source_id', 'id');
    }
}
