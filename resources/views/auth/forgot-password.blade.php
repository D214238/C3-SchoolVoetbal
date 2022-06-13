<x-layout.main>
    <x-auth.auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-auth.application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            Wachtwoord vergeten? Geen probleem. Vul hieronder je e-mail adres in en we sturen je een email met een link om je wachtwoord te resetten.
        </div>

        <!-- Session Status -->
        <x-auth.auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth.auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-auth.label for="email" value="E-mail" />

                <x-auth.input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-auth.button>
                    Verstuur reset wachtwoord mail
                </x-auth.button>
            </div>
        </form>
    </x-auth.auth-card>
</x-layout.main>
