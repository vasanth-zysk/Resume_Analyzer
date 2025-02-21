<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SkillAlias extends Model
{
    public $timestamps = false;
    
    protected $fillable = ['possible_skill_id', 'alias'];

    protected $casts = [
        'possible_skill_id' => 'integer',
        'alias' => 'string'
    ];

    public function skill()
    {
        return $this->belongsTo(PossibleSkill::class, 'possible_skill_id');
    }
}
