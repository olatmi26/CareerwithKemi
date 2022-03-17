<?php

namespace App\Models\Services;

use App\Models\Services\ResumeBuild;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ResumeType extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type',
        'cost',
        'description',
        'featureImage'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];

    /**
     * Get all of the resumeBuild for the ResumeType
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function resumeBuild()
    {
        return $this->hasMany(ResumeBuild::class);
    }
}
