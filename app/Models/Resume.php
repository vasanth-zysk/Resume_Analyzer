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

    // protected static function boot()
    // {
    //     // parent::boot();

    //     // static::updated(function ($resume) {
    //     //     if ($resume->isDirty('file_path')) {
    //     //         $resume->skills = null;
    //     //         $resume->score = null;
    //     //         $resume->needs_analysis = true;
    //     //         $resume->jobRoles()->detach();
    //     //         $resume->save();
    //     //     }
    //     // });
    // }

    public function jobRoles()
    {
        return $this->belongsToMany(JobRole::class, 'job_role_resume', 'resume_id', 'job_role_id')
            ->withPivot('match_percentage')        
            ->withTimestamps();
    }

    protected $casts = [
        'skills' => 'array',
    ];
}
