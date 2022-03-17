<?php

namespace App\Models\Services;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'resume_build_id',
        'AmountPaid',
        'paymentStatus',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'resume_build_id' => 'integer',
        'paymentStatus' => 'boolean',
    ];

    public function users()
    {
        return $this->hasMany(\App\Models\User::class);
    }

    public function resumeBuilds()
    {
        return $this->hasMany(ResumeBuild::class);
    }

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    public function resumeBuild()
    {
        return $this->belongsTo(ResumeBuild::class);
    }
}
