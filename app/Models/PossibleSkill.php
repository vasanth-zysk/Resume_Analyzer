<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PossibleSkill extends Model
{
    /** @use HasFactory<\Database\Factories\PossibleSkillsFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'is_validated'
    ];

    public function aliases()
    {
        return $this->hasMany(SkillAlias::class);
    }

    public function scopeValidated($query)
    {
        return $query->where('is_validated', true);
    }

    public function scopeSearch($query, $term)
    {
        return $query->where('name', 'like', "%{$term}%")
                    ->orWhereHas('aliases', function ($query) use ($term) {
                        $query->where('alias', 'like', "%{$term}%");
                    });
    }
}
