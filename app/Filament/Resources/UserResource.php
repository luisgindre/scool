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
use Filament\Forms\Components\Repeater;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\ColumnGroup;
Use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Support\Facades\Hash;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;

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
                         /* TAB DATOS SISTEMA */
                         Tabs\Tab::make('Dastos de Sistema')
                         ->schema([

                            Split::make([
                                Section::make([
                                
                                /* USER SISTEMA */
                                Fieldset::make('Usuario del Sistema')
                                ->schema([
                                    TextInput::make('email')
                                        ->email()
                                        ->required()
                                        ->maxLength(255)
                                        ->columnSpan(3),
                                    TextInput::make('password')
                                        ->password()
                                        ->dehydrateStateUsing(fn (string $state): string => Hash::make($state))
                                        ->columnSpan(3)
                                        ->hiddenOn('edit'),
                                    Select::make('roles')
                                        ->multiple()
                                        ->preload()
                                        ->relationship(name: 'roles', titleAttribute: 'descrip')
                                        ->columnSpan(6),
                                ])->columns(6),
                                   
                                ]),
                                Section::make([
                                    FileUpload::make('profile_photo_path')
                                    ->label('')
                                    ->avatar(),
                                    Toggle::make('esta_habilitado')
                                    ->label('Habilitado'),
                                ])->grow(false),
                            ])->from('md'),
                             
                         ]),
                         
                         /* TAB DATOS INSTITUCIONALES */
                         Tabs\Tab::make('Datos Institucionales')
                         ->schema([
                                Fieldset::make('')
                                ->relationship('estudiante')
                                ->schema([
                                    TextInput::make('legajo')
                                    ->label('Legajo')
                                    ->readonly()
                                    ->columnSpan(1),
                                    TextInput::make('libro')
                                    ->label('Libro')
                                    ->columnSpan(1),
                                    TextInput::make('folio')
                                    ->label('Folio')
                                    ->columnSpan(2),
                                    TextInput::make('anio_actual')
                                    /* ->required() */
                                    ->label('Curso Vigente')
                                    ->columnSpan(2),
                                    TextInput::make('proy_pedagogico')
                                    ->label('Proyecto Pedagógico')
                                    ->columnSpan(3),
                                    TextInput::make('estado_matriculacion')
                                    ->label('Estado Matriculación')
                                    ->columnSpan(3),
                                   
                                ])->columns(6),
                         ]),
                        /* TAB DATOS PERSONALES */
                        Tabs\Tab::make('Datos Personales')
                            ->schema([    
                 
                                /* PERSONALES */
                                Fieldset::make('Datos Personales')
                                    ->schema([
                                        TextInput::make('apellido')
                                            ->required()
                                            ->maxLength(50)
                                            ->columnSpan(2),
                                        TextInput::make('nombre')
                                            ->required()
                                            ->maxLength(50)
                                            ->columnSpan(2),
                                        TextInput::make('email_inst')
                                            ->email()
                                            ->required()
                                            ->maxLength(255)
                                            ->columnSpan(2),
                                        Select::make('estado_civil_id')
                                            ->required()
                                            ->preload()
                                            ->searchable(['nombre'])
                                            ->relationship(name: 'estadoCivil', titleAttribute: 'nombre')
                                            ->columnSpan(2),
                                        DatePicker::make('fecha_nacimiento')
                                            ->required()
                                            ->columnSpan(2),
                                        TextInput::make('dni')
                                            ->required()
                                            ->maxLength(255)
                                            ->columnSpan(2),
                                        TextInput::make('cuil')
                                            ->required()
                                            ->maxLength(255)
                                            ->columnSpan(2),
                                            Select::make('sexo_id')
                                            ->required()
                                            ->preload()
                                            ->searchable(['nombre'])
                                            ->relationship(name: 'sexo', titleAttribute: 'nombre')
                                            ->columnSpan(2),
                                        Select::make('pais_id')
                                            ->label('Nacionalidad')
                                            ->required()
                                            ->preload()
                                            ->searchable(['nombre'])
                                            ->relationship(name: 'pais', titleAttribute: 'nombre')
                                            ->columnSpan(2),
                                    ])->columns(6),
                                
                                /* CONTACTO */
                                Fieldset::make('Contacto')
                                    ->schema([    
                                        Select::make('provincia_id')
                                            ->label('Provincia')
                                            ->required()
                                            ->preload()
                                            ->searchable(['nombre'])
                                            ->relationship(name: 'pais', titleAttribute: 'nombre')
                                            ->columnSpan(2),
                                        Select::make('localidad_id')
                                            ->label('Localidad')
                                            ->required()
                                            ->preload()
                                            ->searchable(['nombre'])
                                            ->relationship(name: 'pais', titleAttribute: 'nombre')
                                            ->columnSpan(2),
                                        TextInput::make('cel')
                                            ->mask('')
                                            ->required()
                                            ->maxLength(20)
                                            ->columnSpan(1),
                                        TextInput::make('telefono')
                                            ->required()
                                            ->maxLength(200)
                                            ->columnSpan(1),
                                        TextInput::make('domicilio')
                                            ->required()
                                            ->maxLength(200)
                                            ->columnSpan(4),
                                        TextInput::make('cod_postal')
                                            ->required()
                                            ->maxLength(200)
                                            ->columnSpan(2),  
                                    ])->columns(6),
                            ])->columns(6),
                        
                       
                        
                        /* TAB RELACIONES */
                     /*    Tabs\Tab::make('Relaciones')
                            ->schema([
                                Repeater::make('relacion')
                                ->relationship()
                                ->schema([
                                    Select::make('relacion.user_rel_id')
                                        ->label('Author')
                                        ->options(User::all()->pluck('apellido', 'id'))
                                        ->searchable()
                                ])
                            ]), */
                        
                        /* TAB DATOS AUTORIZADOS */
                        Tabs\Tab::make('Autorizados')
                            ->schema([
                                Repeater::make('autorizados')
                                ->relationship()
                                    ->schema([
                                        TextInput::make('apellido')
                                            ->required()
                                            ->maxLength(20),
                                        TextInput::make('nombre')
                                            ->required()
                                            ->maxLength(20),
                                        TextInput::make('dni')
                                            ->maxLength(20),
                                        TextInput::make('telefono')
                                            ->required()
                                            ->maxLength(20),
                                        TextInput::make('email')
                                            ->maxLength(20),
                                        FileUpload::make('photo_path')
                                        ->image()
                                        ->imageEditor()
                                        ->label(''),
                                    ])
                                    ->columns(6)
                                  
                            ]),
                        
                        /* TAB DATOS EMERGENCIA */
                        Tabs\Tab::make('Datos de Emergencia')
                            ->schema([
                                Fieldset::make('Obra Social / Prepaga')
                                    ->relationship('estudiante')
                                    ->schema([
                                        TextInput::make('obra_social')
                                        ->columnSpan(6)
                                        ->label('Nombre'),
                                        TextInput::make('plan')
                                        ->label('Plan')
                                        ->columnSpan(3),
                                        TextInput::make('asociado_id')
                                        ->label('Código Identificación')
                                        ->columnSpan(3),
                                      
                                    ])->columns(6)
                                
                            ]),
                    ]),

            ])->columns(1)
            
            ;
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                /* ImageColumn::make('profile_photo_path')
                    ->circular()
                    ->defaultImageUrl(asset('/img/user-profile.png')), */
                TextColumn::make('FullName')
                    ->searchable(isIndividual: true)
                    ->label('Apellido y Nombre')
                    ->placeholder('Sin dato')
                    ->sortable(),
                TextColumn::make('legajo')
                    ->searchable(isIndividual: true)
                    ->label('Legajo')
                    ->sortable(),
                TextColumn::make('cuil')
                    ->searchable(),
                TextColumn::make('email_inst')
                    ->icon('heroicon-m-envelope')
                    ->iconColor('primary')
                    ->copyable()
                    ->copyMessage('Copiado')
                    ->copyMessageDuration(1500)
                    ->searchable(),  
                TextColumn::make('cel')
                    ->searchable(),
                TextColumn::make('roles.descrip')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Docente'           => 'warning',
                        'Autoridad'         => 'info',
                        'Preceptoría'       => 'success',
                        'Administrador/a'   => 'danger',
                        default             => 'null',
                    }),
            ])
            ->filters([
                SelectFilter::make('role')
                    ->relationship('roles', 'descrip')
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


    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');


    }
}
