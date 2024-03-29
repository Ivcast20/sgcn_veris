<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use OwenIt\Auditing\Contracts\Auditable;

class Category extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

    protected $fillable = [
        'name',
        'status'
    ];

    protected $casts = [
        'status' => 'boolean'
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

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
}
