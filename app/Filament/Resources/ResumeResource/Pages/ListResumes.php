<?php

namespace App\Filament\Resources\ResumeResource\Pages;

use App\Filament\Resources\ResumeResource;
use App\Filament\Resources\ResumeResource\Widgets\ProgressCircleWidget;
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

    // protected function getFooterWidgets(): array
    // {
    //     return [
    //         ProgressCircleWidget::class,
    //     ];
    // }
}
