<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JobRoleResource\Pages;
use App\Filament\Resources\JobRoleResource\RelationManagers;
use App\Models\JobRole;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JobRoleResource extends Resource
{
    protected static ?string $model = JobRole::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('role_name')
                ->string()
<<<<<<< HEAD
                ->required()
                ->label('Role'),
=======
                ->autofocus()
                ->required()
                ->label('Role')
                ->markAsRequired(false),
>>>>>>> 3bd5c97 (Initial Commit)

                Textarea::make('description'),

                Select::make('required_skills')
                ->required()
                // ->minItems(5)
                ->options([
                    'html' => 'HTML5',
                    'css' => 'CSS3',
                    'javascript' => 'JAVASCRIPT',
                    'react' => 'React',
                    'sql' => 'SQL',
                    'php' => 'PHP',
                    'laravel' => 'Laravel',
                    'java' => 'java',
                    'excel' => 'Excel',
                    'python' => 'Python',
                    'git' => 'GIT',
                    'selenium' => 'Selenium',
                    'junit' => 'Junit',
                    'vuejs' => 'Vue.js',
                    'angular' => 'Angular',
                    'nodejs' => 'Node.js',
                    'django' => 'Django',
                    'flutter' => 'Flutter',
                    'restapi' => 'RestAPI',
                    'powerbi' => 'PowerBI',
                    'kubernets' => 'Kubernets',
                    'aws' => 'AWS',
                    'azure' => 'Azure',
                    'linux' => 'Linux',
                ])
                ->multiple()
<<<<<<< HEAD
=======
                ->markAsRequired(false)
>>>>>>> 3bd5c97 (Initial Commit)
                ->label('Skills'),

                TextInput::make('required_experience')
                ->integer()
                ->label('Experience'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('role_name'),
                TextColumn::make('description'),
                TextColumn::make('required_skills'),
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
            'index' => Pages\ListJobRoles::route('/'),
            'create' => Pages\CreateJobRole::route('/create'),
            'edit' => Pages\EditJobRole::route('/{record}/edit'),
        ];
    }
}
