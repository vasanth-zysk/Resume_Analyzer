<?php

namespace App\Filament\Widgets;

use App\Models\Resume;
use App\Models\JobRole;
use Filament\Widgets\TableWidget as Widget;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;

class CandidateMatchingWidget extends Widget
{
    protected static ?string $heading = 'Candidate Matching';
    protected int|string|array $columnSpan = 'full';

    // ✅ Define the table
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
                    ->options(JobRole::pluck('role_name', 'id')->toArray())
                    ->query(function (Builder $query, $data) {
                        if (!empty($data)) {
                            $query->whereHas('jobRoles', function ($q) use ($data) {
                                $q->where('job_roles.id', $data);
                            });
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



