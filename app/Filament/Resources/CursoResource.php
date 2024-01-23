<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CursoResource\Pages;
use App\Filament\Resources\CursoResource\RelationManagers;
use App\Models\Curso;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Repeater;

class CursoResource extends Resource
{
    protected static ?string $model = Curso::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('descripcion')
                    ->required()
                    ->maxLength(255),
                Select::make('asignatura_id')
                    ->preload()
                    ->relationship(name: 'asignatura', titleAttribute: 'nombre'),
                TextInput::make('anio')
                    ->required()
                    ->maxLength(255),
                TextInput::make('trimestre')
                    ->required()
                    ->maxLength(255),
                TextInput::make('horas_catedra')
                    ->required()
                    ->maxLength(255),
                TextInput::make('aula_id')
                    ->required()
                    ->maxLength(255),
                TextInput::make('plan_de_estudio')
                    ->required()
                    ->maxLength(255),
                TextInput::make('nivel')
                    ->required()
                    ->maxLength(255),
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('descripcion')
                    ->searchable(),
                TextColumn::make('asignatura.nombre')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('anio')
                    ->searchable(),
                TextColumn::make('trimestre')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            RelationManagers\UsersRelationManager::class,
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCursos::route('/'),
            'create' => Pages\CreateCurso::route('/create'),
            'edit' => Pages\EditCurso::route('/{record}/edit'),
        ];
    }    
}
