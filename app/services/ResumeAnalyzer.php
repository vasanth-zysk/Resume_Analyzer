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

        // Log::info('🚀 Starting resume analysis', ['resume_id' => $resume->id]);
        // Log::debug('Processing resume file', ['file_path' => $resume->file_path]);

        $text = $this->parseResume(storage_path('app/public/' . $resume->file_path));
        $resumeWords = preg_split('/\s+/', strtolower($text));
        $resumeWords = array_map('trim', $resumeWords);
        $resumeWords = array_map(fn($word) => trim($word, ".,:;!?()[]{}"), $resumeWords);
        



        // dump($text);
        // dump($resumeWords);
        // Log::debug('Parsed text preview', ['text' => substr($text, 0, 200) . '...']);

        $skills = $this->extractSkills($resumeWords);
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
        $possibleSkills = \App\Models\PossibleSkill::pluck('name')->toArray();
        // dd($possibleSkills);
        $foundSkills = array_unique(array_values(array_intersect(array_map('strtolower', $text), array_map('strtolower', $possibleSkills))));
        // dd($foundSkills);

        // foreach ($possibleSkills as $skill) {
        //     if (stripos($text, $skill) !== false) {
        //         $foundSkills[] = $skill;
        //     }
        // }

        return $foundSkills;
    }

    private function extractExperience($text)
    {
        preg_match('/(\d+)\s*years?/', $text, $matches);
        return $matches[1] ?? 0;
    }

    private function calculateScore($skills, $experience)
    {
        return (count($skills) * 0.6 + ($experience * 0.4) / 1) * 100;
    }

    public function matchJobRoles($resume)
    {
        // Get extracted skills from the resume
        $resumeSkills = is_array($resume->skills)
            ? $resume->skills
            : array_map('trim', explode(',', (string)$resume->skills));

        // dump($resumeSkills);

        if (empty($resumeSkills)) {
            DB::table('job_role_resume')->where('resume_id', $resume->id)->delete();
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
            // Convert required_skills to array if it's a string
            $requiredSkills = is_array($jobRole->required_skills)
                ? $jobRole->required_skills
                : array_map('trim', explode(',', (string)$jobRole->required_skills));

            if (empty($requiredSkills)) {
                Log::warning('No required skills found for job role', ['job_role' => $jobRole->name]);
                continue;
            }

            // Normalize skills for comparison
            $normalizedResumeSkills = array_map(function ($skill) {
                return strtolower(trim($skill));
            }, $resumeSkills);

            $normalizedRequiredSkills = array_map(function ($skill) {
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
            }
        }

        if (empty($matchingRoles)) {
            DB::table('job_role_resume')->where('resume_id', $resume->id)->delete();
            Log::info('No matching roles found for resume', ['resume_id' => $resume->id]);
            return [];
        }

        // Sort matching roles by percentage in descending order
        // usort($matchingRoles, function ($a, $b) {
        //     return $b['match_percentage'] <=> $a['match_percentage'];
        // });

        // Keep only the best match
        $matchingRoles = [array_shift($matchingRoles)];

        // Insert into pivot table (job_role_resume)
        DB::table('job_role_resume')->where('resume_id', $resume->id)->delete();
        DB::table('job_role_resume')->insert($matchingRoles);

        return $matchingRoles;
    }
}
