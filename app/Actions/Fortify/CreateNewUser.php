<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            /* 'name' => ['required', 'string', 'max:255'], */
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();
           
        return User::create([
            /* 'name' => $input['name'], */
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'est_civil' => 1,
            'nombre' => 'Luis',
            'apellido' => 'Gindre',
            'email_inst' => 1,
            'fecha_nacimiento' => 1,
            'dni' => 30650828,
            'cuil' => 20306508289,
            'sexo' => 20306508289,
            'nacionalidad' => 'Argrntina',
            'cel' => 1167179135,

        ]);
       
    }
}
