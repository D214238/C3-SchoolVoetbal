<nav class="nav">
    <a href="{{ route('home') }}">
        @is('user')
        <img src="{{ asset('img/4S-Logo.svg') }}" alt="Logo of 4s" class="nav-logo"/>
        @elseis('admin')
        <img src="{{ asset('img/4S-Logo-Admin.svg') }}" alt="Logo of 4s" class="nav-logo"/>
        @endis
    </a>
    <div class="nav-links">
        @is('user')
        <a href="{{ route('dashboard.index') }}">Dashboard</a>
        @elseis('admin')
        <a href="{{ route('admin.dashboard.index') }}">Dashboard</a>
        @endis
        <a href="{{ route('tournaments.index') }}">Toernooien</a>
        <a href="{{ route('games.index') }}">Wedstrijden</a>
        <a href="{{ route('teams.index') }}">Teams</a>
        @is('admin')
        <a href="{{ route('users.index') }}">Gebruikers</a>
        @endis
    </div>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <a href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
            Uitloggen
        </a>
    </form>
</nav>
