<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Resume extends Model
{
    /** @use HasFactory<\Database\Factories\ResumeFactory> */
    use HasFactory;

    protected $fillable = [
        'candidate_name',
        'email',
        'file_path',
        'score',
        'skills',
    ];

    public function jobRoles()
    {
        return $this->belongsToMany(JobRole::class)
            ->withPivot('match_percentage')        
            ->withTimestamps();
    }

    protected $casts = [
        'skills' => 'array',
    ];
}
