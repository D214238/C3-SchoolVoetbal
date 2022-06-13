<x-layout.main>
    <x-auth.auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-auth.application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            Bedankt voor het registreren! Voordat we starten, zou je jou e-mail adres kunnen bevestigen door te klikken op de link in de mail die we je gestuurd hebben. Als je geen e-mail hebt ontvangen sturen we er graag nog een.
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                Een nieuwe verificatielink is gestuurd naar het e-mail adres dat je opgegeven hebt tijdens het registreren.
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-auth.button>
                        Opnieuw verificatielink sturen
                    </x-auth.button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    Uitloggen
                </button>
            </form>
        </div>
    </x-auth.auth-card>
</x-layout.main>
