<x-layout.main>
    <x-auth.auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-auth.application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            Dit is een beveiligd gebied van de applicatie. Voer a.u.b. opnieuw je wachtwoord in.
        </div>

        <!-- Validation Errors -->
        <x-auth.auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <!-- Password -->
            <div>
                <x-auth.label for="password" value="Wachtwoord" />

                <x-auth.input id="password" class="block mt-1 w-full"
                         type="password"
                         name="password"
                         required autocomplete="current-password" />
            </div>

            <div class="flex justify-end mt-4">
                <x-auth.button>
                    Bevestig
                </x-auth.button>
            </div>
        </form>
    </x-auth.auth-card>
</x-layout.main>
