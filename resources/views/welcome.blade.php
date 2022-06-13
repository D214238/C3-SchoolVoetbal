<x-layout.main>
    <x-auth.auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-auth.application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>
        <div class="card-welcome">
            <h1 class="welcome-message">Welkom, selecteer hieronder of je wilt inloggen met een bestaand account of je een nieuw account wilt registreren.</h1>
            @auth
                @if(Auth::user()->is_admin == true)
                    <a href="{{ route('admin-dashboard') }}">DASHBOARD</a>
                @else
                    <a href="{{ route('dashboard') }}">DASHBOARD</a>
                @endif
            @endauth
            @guest
                <div id="welcome-links">
                    <a id="welcome-link-login" href="{{route('login')}}">INLOGGEN</a>
                    <a id="welcome-link-register" href="{{route('register')}}">REGISTREREN</a>
                </div>
            @endguest
        </div>
    </x-auth.auth-card>
</x-layout.main>
