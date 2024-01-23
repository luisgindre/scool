<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use App\Notifications\UsuarioCreado;
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
use Filament\Forms\Components\CheckboxList;


class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    
    protected static ?string $navigationGroup = 'Administradores';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('roles')
                ->multiple()
                ->preload()
                ->relationship(name: 'roles', titleAttribute: 'descrip'),
                TextInput::make('est_civil')
                    ->required()
                    ->numeric(),
                TextInput::make('nombre')
                    ->required()
                    ->maxLength(50),
                TextInput::make('apellido')
                    ->required()
                    ->maxLength(50),
                TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                TextInput::make('email_inst')
                    ->email()
                    ->required()
                    ->maxLength(255),
                TextInput::make('fecha_nacimiento')
                    ->required()
                    ->maxLength(255),
                TextInput::make('dni')
                    ->required()
                    ->maxLength(255),
                TextInput::make('cuil')
                    ->required()
                    ->maxLength(255),
                TextInput::make('sexo')
                    ->required()
                    ->maxLength(255),
                TextInput::make('nacionalidad')
                    ->required()
                    ->maxLength(255),
                TextInput::make('cel')
                    ->required()
                    ->maxLength(20),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('est_civil')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('roles.descrip')
                ->badge()
                ->color(fn (string $state): string => match ($state) {
                    'Docente' => 'warning',
                    'Administrador/a' => 'danger',
                    'Autoridad' => 'info',
                    'Preceptoría' => 'success',
                    default => 'null',
                }),
                TextColumn::make('nombre')
                    ->searchable(),
                TextColumn::make('apellido')
                    ->searchable(),
                TextColumn::make('email')
                    ->searchable(),
                TextColumn::make('email_inst')
                    ->searchable(),
                TextColumn::make('fecha_nacimiento')
                    ->searchable(),
                TextColumn::make('dni')
                    ->searchable(),
                TextColumn::make('cuil')
                    ->searchable(),
                TextColumn::make('sexo')
                    ->searchable(),
                TextColumn::make('nacionalidad')
                    ->searchable(),
                TextColumn::make('cel')
                    ->searchable(),
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
            RelationManagers\CursosRelationManager::class,
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }    
    

    protected function afterCreate(User $user): void
    {
        $user->notify((new UsuarioCreado('prueba')));
    }
}
