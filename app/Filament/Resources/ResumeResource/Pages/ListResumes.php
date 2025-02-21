<?php

namespace App\Filament\Resources\ResumeResource\Pages;

use App\Filament\Resources\ResumeResource;
<<<<<<< HEAD
=======
use App\Filament\Resources\ResumeResource\Widgets\ProgressCircleWidget;
>>>>>>> 3bd5c97 (Initial Commit)
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListResumes extends ListRecords
{
    protected static string $resource = ResumeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
<<<<<<< HEAD
=======

    // protected function getFooterWidgets(): array
    // {
    //     return [
    //         ProgressCircleWidget::class,
    //     ];
    // }
>>>>>>> 3bd5c97 (Initial Commit)
}
