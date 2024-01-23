<?php

namespace App\Filament\Resources\UserResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;

class CursosRelationManager extends RelationManager
{
    protected static string $relationship = 'cursos';

    public function form(Form $form): Form
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

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('descripcion')
            ->columns([
                Tables\Columns\TextColumn::make('descripcion'),
                Tables\Columns\TextColumn::make('nivel'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
                Tables\Actions\AttachAction::make()
                ->preloadRecordSelect(),
                
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
