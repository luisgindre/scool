<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CursoResource\Pages;
use App\Filament\Resources\CursoResource\RelationManagers;
use App\Models\Asignatura;
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
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Get;
use Illuminate\Support\Collection;
use Filament\Forms\Set;
use Illuminate\Support\Str;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Columns\ImageColumn;


class CursoResource extends Resource
{
    protected static ?string $model = Curso::class;

    protected static ?string $navigationIcon = 'heroicon-o-bookmark';

    protected static ?string $navigationGroup = 'Administrar';

    protected static ?string $modelLabel = 'Curso';

    protected static ?string $navigationLabel = 'Cursos';
    
    protected static ?string $pluralModelLabel = 'Cursos';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nombre')
                ->required()
                ->maxLength(255),
               /*  select::make('asignatura_id')
                    ->options(fn (Get $get): Collection => Asignatura::query()
                    ->where('anio', $get('anio'))
                    ->pluck('nombre', 'id'))
                    ->live()
                    ->afterStateUpdated(function (Get $get, Set $set, ?string $old, ?string $state) {
                        $slug = Asignatura::query()
                                    ->where('id', $state)
                                    ->pluck('nombre');
                        $set('descripcion',$slug[0].' '.$get('anio') );
                    }), */
                TextInput::make('anio_vigencia')
                    ->numeric()
                    ->required(),
                TextInput::make('turno')
                    ->required()
                    ->maxLength(255),
                TextInput::make('nivel')
                    ->required()
                    ->maxLength(255),
              
                
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nombre')
                    ->searchable(),
                ImageColumn::make('users.profile_photo_path')
                    ->defaultImageUrl(asset('/img/user-profile.png'))
                    ->circular()
                    ->stacked(), 
                TextColumn::make('anio_vigencia')
                    ->label('Año de Vigencia')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('nivel')
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
                SelectFilter::make('nivel')
                    ->multiple()
                    ->options([
                        '1' => 'Primero',
                        '2' => 'Segundo',
                        '3' => 'Tercero',
                        '4' => 'Tercero',
                        '5' => 'Tercero',
                        '6' => 'Tercero',
                    ])
                
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
