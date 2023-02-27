<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Criteria extends Model
{
    use HasFactory;

    protected $fillable = [
        'bia_id',
        'level_id',
        'parameter_id',
        'description',
        'status'
    ];

    protected $casts = [
        'status' => 'boolean'
    ];

    protected function createdAtR(): Attribute
    {
        return Attribute::make(
            get: fn() => Carbon::createFromFormat('Y-m-d H:i:s',$this->created_at)->format('d/m/Y H:i'),
        );
    }

    protected function updatedAtR(): Attribute
    {
        return Attribute::make(
            get: fn() => Carbon::createFromFormat('Y-m-d H:i:s',$this->updated_at)->format('d/m/Y H:i'),
        );
    }

    public function bia()
    {
        return $this->belongsTo(BiaProcess::class, 'bia_id', 'id');
    }

    public function level()
    {
        return $this->belongsTo(Level::class, 'level_id', 'id');
    }

    public function parameter()
    {
        return $this->belongsTo(Parameter::class, 'parameter_id', 'id');
    }
}
