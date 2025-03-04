<?php

namespace App\Filament\Widgets;

use App\Models\Resume;
use App\Models\JobRole;
use Filament\Widgets\TableWidget as Widget;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Log;

class CandidateMatchingWidget extends Widget
{
    protected static ?string $heading = 'Candidate Matching';
    protected int|string|array $columnSpan = 'full';

    // Define the table
    public function table(Table $table): Table
    {
        return $table
            ->query($this->getTableQuery()) // Fetch filtered candidates
            ->columns([
                Tables\Columns\TextColumn::make('candidate_name')->label('Candidate'),
                Tables\Columns\TextColumn::make('jobRoles.role_name')->label('Matching Role'),
                Tables\Columns\TextColumn::make('match_percentage')
                    ->label('Match %'),
                // ->sortable(),
            ])
            ->filters([
                SelectFilter::make('job_role')
                    ->label('Filter by Job Role')
                    // ->native(false)
                    ->options(JobRole::pluck('role_name', 'id')->toArray())
                    ->query(function (Builder $query, $data) {
                        // dump($data);
                        $jobRoleId = data_get($data, 'value'); // ✅ Extract the correct value
                        // dd($jobRoleId);
                        Log::info("Filter Received: " . json_encode($data));
                        Log::info("Extracted Job Role ID: " . ($jobRoleId ?? 'None'));

                        if ($jobRoleId !== null && $jobRoleId !== '') {
                            Log::info("Applying filter for job_role ID: ");
                            $query->whereHas('jobRoles', function ($q) use ($data) {
                                $q->where('job_roles.id', $data);
                            });
                        } else {
                            Log::info("No filter selected. Showing all candidates.");
                        }
                    }),
            ]);
    }

    // ✅ Modify table query to filter candidates dynamically
    protected function getTableQuery(): Builder
    {
        return Resume::query()
            ->select('resumes.*', 'job_role_resume.match_percentage')
            ->join('job_role_resume', 'resumes.id', '=', 'job_role_resume.resume_id')
            ->leftJoin('job_roles', 'job_role_resume.job_role_id', '=', 'job_roles.id')
            ->with('jobRoles')
            ->orderBy('job_role_resume.match_percentage', 'desc');
    }
}
