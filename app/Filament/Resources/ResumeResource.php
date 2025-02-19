<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ResumeResource\Pages;
use App\Filament\Resources\ResumeResource\Pages\EditResume;
use App\Filament\Resources\ResumeResource\RelationManagers;
use App\Models\Resume;
use App\Services\ResumeAnalyzer;
use Filament\Forms;
use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
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
                TextInput::make('email')->unique(),
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
                // TextColumn::make('file_path'),
                TextColumn::make('skills'),
                TextColumn::make('jobRoles')
                    ->label('Match Percentage')
                    ->formatStateUsing(
                        fn($record) =>
                        $record->jobRoles->map(fn($role) => "{$role->pivot->match_percentage}")->implode(', ')
                    )
                    ->sortable(),
                TextColumn::make('jobRoles.role_name')
                    ->label('Matching Job Roles')
                    ->badge()
                    ->color('success')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
}
