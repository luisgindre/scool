<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AsignaturaResource\Pages;
use App\Filament\Resources\AsignaturaResource\RelationManagers;
use App\Models\Asignatura;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;

class AsignaturaResource extends Resource
{
    protected static ?string $model = Asignatura::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    protected static ?string $navigationGroup = 'Administrar';

    protected static ?string $modelLabel = 'Asignatura';

    protected static ?string $navigationLabel = 'Asignaturas';
    
    protected static ?string $pluralModelLabel = 'Asignaturas';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nombre')
                    ->required()
                    ->maxLength(255),
                TextInput::make('tipo_ciclo')
                    ->required()
                    ->maxLength(255),
                TextInput::make('anio')
                    ->required()
                    ->maxLength(255),
                TextInput::make('ciclo')
                    ->required()
                    ->maxLength(255),
                TextInput::make('horas')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nombre')
                    ->searchable(),
                Tables\Columns\TextColumn::make('anio')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ciclo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('horas')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tipo_ciclo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
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
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAsignaturas::route('/'),
            'create' => Pages\CreateAsignatura::route('/create'),
            'edit' => Pages\EditAsignatura::route('/{record}/edit'),
        ];
    }    
}
