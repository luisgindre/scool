<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Filament\Models\Contracts\FilamentUser;
use Filament\Models\Contracts\HasName;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\EstadoCivil;

class User extends Authenticatable implements HasName
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nombre', // Agregar los campos adicionales
        'apellido',
        'user_id',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function getFilamentName(): string
    {
        return "{$this->nombre} {$this->apellido}";
    }

    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class);
    }
   
    
    public function cursos(): BelongsToMany
    {
        return $this->belongsToMany(Curso::class);
    }

    public function pais(): BelongsTo
    {
        return $this->belongsTo(Pais::class);
    }
    
    public function sexo(): BelongsTo
    {
        return $this->belongsTo(Sexo::class);
    }
    
    public function estadoCivil(): BelongsTo
    {
        return $this->belongsTo(EstadoCivil::class,'id');
    }

    public function getFullNameAttribute()
    {
        return $this->apellido . ', ' . $this->nombre ;
    }

    public function autorizados(): HasMany
    {
        return $this->hasMany(Autorizado::class);
    }
   
   
    public function relacion(): BelongsToMany
    {
        return $this->belongsToMany(User::class,'role_user_user');
    }

    public function estudiante()
    {
        return $this->hasOne(Estudiante::class);
    }
}
