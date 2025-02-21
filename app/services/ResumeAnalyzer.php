<?php

namespace App\Services;

use App\Models\JobRole;
use App\Models\Resume;
use Smalot\PdfParser\Parser;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

use function PHPSTORM_META\type;

class ResumeAnalyzer
{
    public function analyze($resume)
    {

        $resume = Resume::find($resume->id);

<<<<<<< HEAD
        Log::info('🚀 Starting resume analysis', ['resume_id' => $resume->id]);
        Log::debug('Processing resume file', ['file_path' => $resume->file_path]);

        $text = $this->parseResume(storage_path('app/public/' . $resume->file_path));
        Log::debug('Parsed text preview', ['text' => substr($text, 0, 200) . '...']);

        $skills = $this->extractSkills($text);
        Log::debug('Extracted skills', ['skills' => $skills]);

        $experience = $this->extractExperience($text);
        Log::debug('Extracted experience', ['years' => $experience]);

        $score = $this->calculateScore($skills, $experience);
        Log::debug('Calculated score', ['score' => $score]);

        Log::info('✅ Resume analysis completed', [
            'skills' => $skills,
            'experience' => $experience,
            'score' => $score
        ]);
        
        $this->matchJobRoles($resume);
=======
        // Log::info('🚀 Starting resume analysis', ['resume_id' => $resume->id]);
        // Log::debug('Processing resume file', ['file_path' => $resume->file_path]);

        $text = $this->parseResume(storage_path('app/public/' . $resume->file_path));
        // Log::debug('Parsed text preview', ['text' => substr($text, 0, 200) . '...']);

        $skills = $this->extractSkills($text);
        // Log::debug('Extracted skills', ['skills' => $skills]);

        $experience = $this->extractExperience($text);
        // Log::debug('Extracted experience', ['years' => $experience]);

        $score = $this->calculateScore($skills, $experience);
        // Log::debug('Calculated score', ['score' => $score]);

        // Log::info('✅ Resume analysis completed', [
            // 'skills' => $skills,
            // 'experience' => $experience,
            // 'score' => $score
        // ]);
        
        // $this->matchJobRoles($resume);
>>>>>>> 3bd5c97 (Initial Commit)
        return [
            'skills' => $skills,
            'experience' => $experience,
            'score' => $score,
        ];

    }

    private function parseResume($filePath)
    {
        $parser = new Parser();
        $pdf = $parser->parseFile($filePath);
        return $pdf->getText();
    }

    private function extractSkills($text)
    {
        $possibleSkills = ['PHP', 'Laravel', 'SQL', 'JavaScript', 'Python', 'HTML', 'CSS', 'java'];
        $foundSkills = [];

        foreach ($possibleSkills as $skill) {
            if (stripos($text, $skill) !== false) {
                $foundSkills[] = $skill;
            }
        }

        return $foundSkills;
    }

    private function extractExperience($text)
    {
        preg_match('/(\d+)\s*years?/', $text, $matches);
        return $matches[1] ?? 0;
    }

    private function calculateScore($skills, $experience)
    {
        return (count($skills) * 0.6 + ($experience * 0.4)/1)*100;
    }

    public function matchJobRoles($resume)
    {
        // Get extracted skills from the resume
<<<<<<< HEAD
        $resumeSkills = explode(',', trim($resume->skills)); // Split by comma after trimming
        $resumeSkills = array_map('trim', $resumeSkills); // Remove whitespace from each skill

        if (!$resumeSkills) {
=======
        $resumeSkills = is_array($resume->skills) 
            ? $resume->skills 
            : array_map('trim', explode(',', (string)$resume->skills));

            // dump($resumeSkills);

        if (empty($resumeSkills)) {
>>>>>>> 3bd5c97 (Initial Commit)
            Log::warning('No skills found in resume', ['resume_id' => $resume->id]);
            return [];
        }

        // Retrieve all job roles with their required skills
        $jobRoles = JobRole::get();

        if ($jobRoles->isEmpty()) {
            Log::warning('No job roles found in the database');
            return [];
        }

        $matchingRoles = [];

        foreach ($jobRoles as $jobRole) {
<<<<<<< HEAD
            $requiredSkills = $jobRole->required_skills;
            // dump("Required Skills: ".count($requiredSkills));

            if (!$requiredSkills) continue; // Skip if no required skills are defined
=======
            // Convert required_skills to array if it's a string
            $requiredSkills = is_array($jobRole->required_skills)
                ? $jobRole->required_skills
                : array_map('trim', explode(',', (string)$jobRole->required_skills));
>>>>>>> 3bd5c97 (Initial Commit)

            if (empty($requiredSkills)) {
                Log::warning('No required skills found for job role', ['job_role' => $jobRole->name]);
                continue;
            }
<<<<<<< HEAD
            // Find matching skills
            $resumeSkills = array_map(function($skill) {
                return strtolower(trim($skill));
            }, $resumeSkills);
            $requiredSkills = array_map(function($skill) {
                return strtolower(trim($skill));
            }, $requiredSkills);
            $commonSkills = array_intersect($requiredSkills, $resumeSkills);
            // dump("common skills: ".count($commonSkills));
            // \Log::info('matching skills---------->',[$commonSkills]);

            // Calculate match percentage
            $matchPercentage = (count($commonSkills) / count($requiredSkills)) * 100;

            if ($matchPercentage >= 70) {
                // Check if there's already a better match
                $existingMatchIndex = null;
                $existingMatchPercentage = 0;
                
                foreach ($matchingRoles as $index => $match) {
                    if ($match['match_percentage'] > $existingMatchPercentage) {
                        $existingMatchIndex = $index;
                        $existingMatchPercentage = $match['match_percentage'];
                    }
                }

                if ($matchPercentage > $existingMatchPercentage) {
                    // If current match is better, replace the existing one
                    if ($existingMatchIndex !== null) {
                        unset($matchingRoles[$existingMatchIndex]);
                    }
                    $matchingRoles[] = [
                        'job_role_id' => $jobRole->id,
                        'resume_id' => $resume->id,
                        'match_percentage' => $matchPercentage,
                    ];
                }
=======

            // Normalize skills for comparison
            $normalizedResumeSkills = array_map(function($skill) {
                return strtolower(trim($skill));
            }, $resumeSkills);

            $normalizedRequiredSkills = array_map(function($skill) {
                return strtolower(trim($skill));
            }, $requiredSkills);

            $commonSkills = array_intersect($normalizedRequiredSkills, $normalizedResumeSkills);
            
            // Calculate match percentage
            $matchPercentage = (count($commonSkills) / count($requiredSkills)) * 100;

            if ($matchPercentage >= 20) {
                $matchingRoles[] = [
                    'job_role_id' => $jobRole->id,
                    'resume_id' => $resume->id,
                    'match_percentage' => round($matchPercentage, 2),
                ];
>>>>>>> 3bd5c97 (Initial Commit)
            }
        }

        if (empty($matchingRoles)) {
<<<<<<< HEAD
=======
            DB::table('job_role_resume')->where('resume_id', $resume->id)->delete();
>>>>>>> 3bd5c97 (Initial Commit)
            Log::info('No matching roles found for resume', ['resume_id' => $resume->id]);
            return [];
        }

<<<<<<< HEAD
        // Insert into pivot table (job_role_resume)
        DB::table('job_role_resume')->where('resume_id', $resume->id)->delete(); // Remove old matches
=======
        // Sort matching roles by percentage in descending order
        usort($matchingRoles, function($a, $b) {
            return $b['match_percentage'] <=> $a['match_percentage'];
        });

        // Keep only the best match
        $matchingRoles = [array_shift($matchingRoles)];

        // Insert into pivot table (job_role_resume)
        DB::table('job_role_resume')->where('resume_id', $resume->id)->delete();
>>>>>>> 3bd5c97 (Initial Commit)
        DB::table('job_role_resume')->insert($matchingRoles);

        return $matchingRoles;
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> 3bd5c97 (Initial Commit)
