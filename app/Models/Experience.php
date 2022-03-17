<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'companyName',
        'positionHeld',
        'fromYear',
        'toYear',
        'isCurrentJob',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'fromYear' => 'date',
        'toYear' => 'date',
        'isCurrentJob' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
