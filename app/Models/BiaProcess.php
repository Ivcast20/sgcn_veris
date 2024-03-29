<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use PHPUnit\Framework\MockObject\Rule\Parameters;

class BiaProcess extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

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

    protected function createdAtR(): Attribute
    {
        return Attribute::make(
            get: fn() => Carbon::createFromFormat('Y-m-d H:i:s',$this->created_at)->format('d/m/Y H:i')
        );
    }

    protected function updatedAtR(): Attribute
    {
        return Attribute::make(
            get: fn() => Carbon::createFromFormat('Y-m-d H:i:s',$this->updated_at)->format('d/m/Y H:i')
        );
    }

    protected function fechaInicioR(): Attribute
    {
        return Attribute::make(
            get: fn() => Carbon::createFromFormat('Y-m-d',$this->fecha_inicio)->format('d/m/Y')
        );
    }

    public function products()
    {
        return $this->belongsToMany(Product::class,'bia_process_product','bia_id','product_id');
    }

    public function average_score_products()
    {
        return $this->hasMany(ProductScoreAverage::class, 'bia_process_id', 'id');
    }

    public function critical_products()
    {
        return $this->average_score_products()->where('is_critical',true);
    }

    public function parameters()
    {
        return $this->hasMany(Parameters::class,'bia_id','id');
    }

    public function estado()
    {
        return $this->belongsTo(BiaEstado::class, 'estado_id', 'id');
    }

    public function risks()
    {
        return $this->hasMany(Risk::class, 'bia_id', 'id');
    }
}
