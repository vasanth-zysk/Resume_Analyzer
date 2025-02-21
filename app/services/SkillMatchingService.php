<?php

namespace App\Services;

use App\Models\PossibleSkill;
use App\Models\SkillAlias;
use Illuminate\Support\Str;

class SkillMatchingService
{
    protected const SIMILARITY_THRESHOLD = 85;
    
    protected $commonReplacements = [
        'javascript' => 'javascript',
        'js' => 'javascript',
        'restapi' => 'restful apis',
        'rest api' => 'restful apis',
        'restful api' => 'restful apis',
        'react js' => 'react',
        'reactjs' => 'react',
        'vue js' => 'vue.js',
        'vuejs' => 'vue.js',
        'nodejs' => 'node.js',
        'node js' => 'node.js',
        'typescript' => 'typescript',
        'ts' => 'typescript',
        'py' => 'python',
        'dotnet' => '.net',
        'net' => '.net',
        'cpp' => 'c++',
        'postgres' => 'postgresql',
        'mongo' => 'mongodb',
    ];

    public function findMatchingSkill(string $inputSkill)
    {
        $normalizedInput = $this->normalizeSkillName($inputSkill);

        // Try exact match first
        $skill = PossibleSkill::validated()
            ->where('name', $normalizedInput)
            ->first();

        if ($skill) {
            return $skill;
        }

        // Try alias match
        $alias = SkillAlias::where('alias', $normalizedInput)
            ->whereHas('skill', function ($query) {
                $query->validated();
            })
            ->first();

        if ($alias) {
            return $alias->skill;
        }

        // Try fuzzy match
        return $this->findFuzzyMatch($normalizedInput);
    }

    private function normalizeSkillName(string $skill): string
    {
        $normalized = preg_replace('/[^a-zA-Z0-9\s\.]/', '', $skill);
        $normalized = Str::lower(trim($normalized));
        
        return $this->commonReplacements[$normalized] ?? $normalized;
    }

    private function findFuzzyMatch(string $normalizedInput)
    {
        $bestMatch = null;
        $highestSimilarity = 0;

        // Check against validated skills and their aliases
        $possibleMatches = PossibleSkill::validated()
            ->with('aliases')
            ->get();

        foreach ($possibleMatches as $skill) {
            // Check skill name similarity
            $similarity = similar_text($skill->name, $normalizedInput, $percent);
            
            if ($percent > $highestSimilarity) {
                $highestSimilarity = $percent;
                $bestMatch = $skill;
            }

            // Check aliases
            foreach ($skill->aliases as $alias) {
                similar_text($alias->alias, $normalizedInput, $percent);
                if ($percent > $highestSimilarity) {
                    $highestSimilarity = $percent;
                    $bestMatch = $skill;
                }
            }
        }

        return $highestSimilarity >= self::SIMILARITY_THRESHOLD ? $bestMatch : null;
    }
}
