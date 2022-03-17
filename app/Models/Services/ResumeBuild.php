<?php

namespace App\Models\Services;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResumeBuild extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'orderID',
        'name',
        'resume_type_id',
        'user_id',
        'completed',
        'asDownload',
        'paymentSuccessful',
        'datePurchased',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'resume_type_id' => 'integer',
        'user_id' => 'integer',
        'completed' => 'boolean',
        'asDownload' => 'boolean',
        'paymentSuccessful' => 'boolean',
        'datePurchased' => 'datetime',
    ];

    public function users()
    {
        return $this->belongsToMany(\App\Models\User::class);
    }

    public function resumeType()
    {
        return $this->belongsTo(ResumeType::class);
    }

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
}
