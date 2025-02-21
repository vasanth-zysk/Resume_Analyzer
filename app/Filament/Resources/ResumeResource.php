<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ResumeResource\Pages;
use App\Filament\Resources\ResumeResource\Pages\EditResume;
use App\Filament\Resources\ResumeResource\RelationManagers;
use App\Filament\Resources\ResumeResource\Widgets\ProgressCircleWidget;
use App\Models\Resume;
use App\Services\ResumeAnalyzer;
use Faker\Core\Color;
use Filament\Tables\Actions\ActionGroup;
use Filament\Forms;
use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\Action as TableAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ResumeResource extends Resource
{
    protected static ?string $model = Resume::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    // protected static ?string $navigationLabel = 'Resume';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('candidate_name'),
                TextInput::make('email')->unique(ignoreRecord: true),
                FileUpload::make('file_path')
                    ->label('Upload Resume')
                    ->disk('public')
                    ->directory('resumes')
                    ->required()
                    ->markAsRequired(false),
                TextInput::make('skills')
                    ->disabled()
                    ->visibleOn('edit'),
                TextInput::make('score')
                    ->disabled()
                    ->visibleOn('edit'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('candidate_name'),
                TextColumn::make('email'),
                TextColumn::make('skills')
                    ->placeholder('No Skills found')
                    ->badge()
                    ->color('info')
                    ->wrap(),
                TextColumn::make('match_percentage')
                    ->label('Match Percentage')
                    ->view('filament.tables.columns.progress-circle')
                    ->alignCenter()
                    ->state(function ($record) {
                        $percentage = $record->jobRoles->first()?->pivot->match_percentage;
                        return $percentage ? round($percentage, 0) : 0;
                    }),
                TextColumn::make('jobRoles.role_name')
                    ->label('Matching Job Roles')
                    // ->default('No Matching Roles Found')
                    ->placeholder('No Matching Roles')
                    ->badge()
                    ->color('success')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                ActionGroup::make([
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\ViewAction::make(),
                    TableAction::make('Analyze')
                        ->label('Analyze Resume')
                        // ->color('success')
                        // ->button()
                        ->action(function (Resume $record): void {
                            try {
                                $resumeAnalyzer = new ResumeAnalyzer();
                                $result = $resumeAnalyzer->analyze($record);
                                $record->update([
                                    'score' => $result['score'],
                                    'skills' => $result['skills'],
                                    // 'skills' => implode(', ', $result['skills']),
                                ]);
                                $resumeAnalyzer->matchJobRoles($record);
    
                                Notification::make()
                                    ->success()
                                    ->title('Resume analyzed successfully')
                                    ->send();
                            } catch (\Exception $e) {
                                Notification::make()
                                    ->danger()
                                    ->title('Failed to analyze resume')
                                    ->body($e->getMessage())
                                    ->send();
                            }
                        })
                ])
                    ->button()
                    ->color('secondary'),



            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListResumes::route('/'),
            'create' => Pages\CreateResume::route('/create'),
            'edit' => Pages\EditResume::route('/{record}/edit'),
        ];
    }

    // public static function getHeaderWidgets(): array
    // {
    //     return [
    //         ProgressCircleWidget::class,
    //     ];
    // }

    // public static function getWidgets(): array
    // {
    //     return [
    //         ProgressCircleWidget::class,
    //     ];
    // }
}
