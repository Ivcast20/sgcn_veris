<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Level extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'value',
        'status',
        'bia_id'
    ];

    protected $casts = [
        'status' => 'boolean'
    ];

    protected function name(): Attribute
    {
        return Attribute::make(
            get: fn($name) => ucfirst(strtolower($name))
        );
    }

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
        return $this->belongsTo(BiaProcess::class,'bia_id','id');
    }
}
