<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductScoreAverage extends Model
{
    use HasFactory;

    protected $fillable = [
        'bia_process_id',
        'product_id',
        'total_score',
        'is_critical',
        'user_asigned'
    ];

    protected $casts = [
        'is_critical' => 'boolean'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_asigned');
    }

    public function activities()
    {
        return $this->hasMany(Activity::class, 'critic_product_id', 'id');
    }
}
