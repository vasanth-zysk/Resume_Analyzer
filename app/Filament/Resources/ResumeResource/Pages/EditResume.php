<?php

namespace App\Filament\Resources\ResumeResource\Pages;

use App\Filament\Resources\ResumeResource;
use App\Models\Resume;
use App\Services\ResumeAnalyzer;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Resources\Pages\EditRecord;
use Filament\Notifications\Notification;

class EditResume extends EditRecord
{
    protected static string $resource = ResumeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        //     Action::make('analyze')
        //         ->label('Analyze Resume')
        //         ->action(function(Resume $record): void {
        //             try {
        //                 $resumeAnalyzer = new ResumeAnalyzer();
        //                 $result = $resumeAnalyzer->analyze($record);
        //                 $record->update([
        //                     'score' => $result['score'],
        //                     'skills' => implode(', ', $result['skills']),
        //                 ]);

        //                 Notification::make()
        //                     ->success()
        //                     ->title('Resume analyzed successfully')
        //                     ->send();
        //             } catch (\Exception $e) {
        //                 Notification::make()
        //                     ->danger()
        //                     ->title('Failed to analyze resume')
        //                     ->body($e->getMessage())
        //                     ->send();
        //             }
        //         })
        ];
    }
}
