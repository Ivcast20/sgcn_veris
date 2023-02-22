<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'last_name',
        'cargo',
        'email',
        'department_id',
        'password',
        'status'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'status' => 'boolean'
    ];

    function adminlte_desc()
    {
        return 'Bienvenido ' . $this->name;
    }

    protected function name(): Attribute
    {
        return Attribute::make(
            get: fn($name) => Str::title($name),
            set: fn($name) => Str::upper($name),
        );
    }

    protected function lastName(): Attribute
    {
        return Attribute::make(
            get: fn($last_name) => Str::title($last_name),
            set: fn($last_name) => Str::upper($last_name),
        );
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

    protected function fullName(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->last_name . ' ' . $this->name,
        );
    }

    public function department()
    {
        return $this->belongsTo(Department::class,'department_id','id');
    }
}
