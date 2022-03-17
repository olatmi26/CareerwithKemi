<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkillBank extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'career_id',
        'skill',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'career_id' => 'integer',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function career()
    {
        return $this->belongsTo(Career::class);
    }
}
