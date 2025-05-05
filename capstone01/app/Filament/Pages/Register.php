<?php

namespace App\Filament\Pages;

use Filament\Forms\Form;
use Filament\Pages\Auth\Register as BaseRegister;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;

class Register extends BaseRegister
{
    public function form(Form $form): Form
    {
        return $form->schema($this->getFormSchema());
    }

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('name')
                ->label('Name')
                ->required()
                ->maxLength(255),
            TextInput::make('email')
                ->label('Email')
                ->email()
                ->required()
                ->maxLength(255),
            TextInput::make('username')
                ->label('Username')
                ->required()
                ->maxLength(50),
            TextInput::make('password')
                ->label('Password')
                ->password()
                ->required()
                ->minLength(8),
            TextInput::make('passwordConfirmation')
                ->label('Confirm Password')
                ->password()
                ->required()
                ->same('password'),
            TextInput::make('age')
                ->label('Age')
                ->numeric()
                ->nullable(),
            TextInput::make('weight')
                ->label('Weight (kg)')
                ->numeric()
                ->nullable(),
            TextInput::make('height')
                ->label('Height (cm)')
                ->numeric()
                ->nullable(),
            Select::make('activity_level')
                ->label('Activity Level')
                ->options([
                    'sedentary' => 'Sedentary',
                    'light' => 'Light',
                    'moderate' => 'Moderate',
                    'active' => 'Active',
                ])
                ->nullable(),
        ];
    }

    protected function handleRegistration(array $data): \Illuminate\Database\Eloquent\Model
    {
        return $this->getUserModel()::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'username' => $data['username'],
            'password' => bcrypt($data['password']),
            'age' => $data['age'],
            'weight' => $data['weight'],
            'height' => $data['height'],
            'activity_level' => $data['activity_level'] ?? null,
            'status' => 'active',
        ]);
    }
}
