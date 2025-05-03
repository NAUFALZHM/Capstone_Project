<?php
namespace App\Filament\Pages;

use Filament\Pages\Auth\Login as BaseLogin;
use Filament\Forms\Components\TextInput;
use App\Filament\Pages\Log;
class Login extends BaseLogin
{
    protected function getCredentialsFromFormData(array $data): array
    {
        // Log::info('Login attempt with credentials: ' . json_encode($data));
        return [
            'username' => $data['username'], // Gunakan username untuk login
            'password' => $data['password'],
        ];
    }

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('username')
                ->label('Username')
                ->required()
                ->autofocus(),
            TextInput::make('password')
                ->label('Password')
                ->password()
                ->required(),
        ];
    }
}
