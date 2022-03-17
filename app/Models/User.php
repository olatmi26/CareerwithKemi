<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'firstName',
        'middleName',
        'surName',
        'phoneN0',
        'phoneN02',
        'ResidentialAddress',
        'city_id',
        'state_id',
        'country_id',
        'photo',
        'email',      
        'password',
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
    ];


    public function FullName(): Attribute
    {
        return new Attribute(
            get: fn ($value) =>strtoupper($value),
            set: fn ($value) =>$value,
        );
    }



    // public function roles()
    // {
    //     return $this->belongsToMany(\App\Models\Role::class)->withTimestamps();
    // }

    // public function hasrole($role)
    // {
    //     if ($this->roles()->where('name', $role)->first()) { //single role
    //         return true;
    //     }
    //     return false;
    // }

    // public function hasAnyroles($roles)
    // {
    //     if ($this->roles()->whereIn('name', $roles)->first()) { //list or roles
    //         return true;
    //     }
    //     return false;
    // }

}
