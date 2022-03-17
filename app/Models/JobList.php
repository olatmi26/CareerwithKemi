<?php

namespace App\Models;

use App\Models\Career;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JobList extends Model
{
    use HasFactory;
    protected $fillable = [
        'career_id',
        'jobTitle'
    ];

    /**
     * Get the Career that owns the JobList
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Career()
    {
        return $this->belongsTo(Career::class);
    }
}
