<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class JobRole extends Model
{
    /** @use HasFactory<\Database\Factories\JobRoleFactory> */
    use HasFactory;

    

    protected $fillable = [
        'role_name',
        'description',
        'required_skills',
        'required_experience',
    ];

    protected $casts = [
        'required_skills' => 'array',
    ];
    
    public function resumes()
    {
        return $this->belongsToMany(Resume::class)
            ->withPivot('match_percentage')
            ->withTimestamps();
    }
}
