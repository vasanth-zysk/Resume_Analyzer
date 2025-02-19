<?php

namespace App\Filament\Resources\ResumeResource\Pages;

use App\Filament\Resources\ResumeResource;
use App\Models\Resume;
use App\Services\ResumeAnalyzer;
use Filament\Actions\Action;
// use Filament\Forms\Components\Actions\Action;
use Filament\Resources\Pages\CreateRecord;

class CreateResume extends CreateRecord
{
    protected static string $resource = ResumeResource::class;

    protected function afterCreated(): void
    {
        parent::afterCreated();

        // Retrieve the resume we just created
        $resume = $this->record;

        // Call the ResumeAnalyzer to analyze the resume
        $resumeAnalyzer = new ResumeAnalyzer();
        $result = $resumeAnalyzer->analyze($resume);

        // Update the resume record with the analysis results
        $resume->update([
            'score' => $result['score'],
            'skills' => implode(', ', $result['skills']),
        ]);
    }
}
