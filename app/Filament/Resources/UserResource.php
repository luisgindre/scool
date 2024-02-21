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
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Split;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Tabs;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-s-user-circle';
    
    protected static ?string $navigationGroup = 'Administrar';

    protected static ?string $modelLabel = 'Usuario';

    protected static ?string $navigationLabel = 'Usuarios';
    
    protected static ?string $pluralModelLabel = 'Usuarios';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs::make('Tabs')
                    ->tabs([
                        Tabs\Tab::make('Datos Personales')
                            ->schema([
                                Split::make([
                                    Section::make([
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
                                        Select::make('estado_civil_id')
                                            ->required()
                                            ->preload()
                                            ->searchable(['nombre'])
                                            ->relationship(name: 'estadoCivil', titleAttribute: 'nombre'),
                                        DatePicker::make('fecha_nacimiento')
                                            ->required(),
                                        TextInput::make('dni')
                                            ->required()
                                            ->maxLength(255),
                                        TextInput::make('cuil')
                                            ->required()
                                            ->maxLength(255),
                                        TextInput::make('sexo')
                                            ->required()
                                            ->maxLength(255),
                                        Select::make('pais_id')
                                            ->required()
                                            ->preload()
                                            ->searchable(['nombre'])
                                            ->relationship(name: 'pais', titleAttribute: 'nombre'),
                                        TextInput::make('cel')
                                            ->required()
                                            ->maxLength(20),
                                        
                                    ])->columns(2),
                                    Section::make([
                                        Toggle::make('is_published'),
                                        Select::make('roles')
                                            ->multiple()
                                            ->preload()
                                            ->relationship(name: 'roles', titleAttribute: 'descrip'),
                                    ])->grow(false),
                                ])->columnSpan(2),
                            ]),
                        Tabs\Tab::make('Datos Académicos')
                            ->schema([
                                
                            ]),
                        Tabs\Tab::make('Datos Familiares')
                            ->schema([
                                TextInput::make('familiar.apellido')
                                ->required()
                                ->maxLength(20),
                                TextInput::make('familiar.nombre')
                                ->required()
                                ->maxLength(20),
                                TextInput::make('familiar.apellido')
                                ->required()
                                ->maxLength(20),
                                TextInput::make('familiar.nombre')
                                ->required()
                                ->maxLength(20),
                            ]),
                        Tabs\Tab::make('Autorizados')
                            ->schema([
                                // ...
                            ]),
                        Tabs\Tab::make('Datos de Emergencia')
                            ->schema([
                                // ...
                            ]),
        ]),
                
            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('FullName')
                    ->label('Apellido y Nombre')
                    ->placeholder('Sin dato')
                    ->sortable(),
                TextColumn::make('legajo')
                    ->label('Legajo')
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
                TextColumn::make('email')
                    ->searchable(),
                TextColumn::make('est_civil')
                    ->numeric()
                    ->sortable(),    
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
