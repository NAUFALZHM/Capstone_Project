<x-filament-panels::page>
<x-filament::auth-card>
    <x-slot name="logo">
        <h1 class="text-2xl font-bold text-yellow-500">Your App Name</h1>
    </x-slot>

    <form wire:submit.prevent="register" class="space-y-4">
        <x-filament::input.wrapper>
            <x-filament::input.label for="name" value="Name" />
            <x-filament::input.text id="name" name="name" required />
        </x-filament::input.wrapper>

        <x-filament::input.wrapper>
            <x-filament::input.label for="email" value="Email" />
            <x-filament::input.text id="email" name="email" required />
        </x-filament::input.wrapper>

        <x-filament::input.wrapper>
            <x-filament::input.label for="username" value="Username" />
            <x-filament::input.text id="username" name="username" required />
        </x-filament::input.wrapper>

        <x-filament::input.wrapper>
            <x-filament::input.label for="password" value="Password" />
            <x-filament::input.text id="password" name="password" type="password" required />
        </x-filament::input.wrapper>

        <x-filament::input.wrapper>
            <x-filament::input.label for="passwordConfirmation" value="Confirm Password" />
            <x-filament::input.text id="passwordConfirmation" name="passwordConfirmation" type="password" required />
        </x-filament::input.wrapper>

        <x-filament::button type="submit" class="w-full bg-yellow-500">
            Sign Up
        </x-filament::button>
    </form>
</x-filament::auth-card>

</x-filament-panels::page>
