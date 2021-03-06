<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Referee extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'refFullName',
        'refOrganisation',
        'refPosition',
        'refEmail',
        'refPhone',
        'onRequest',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'onRequest' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
