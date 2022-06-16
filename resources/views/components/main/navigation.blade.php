<nav class="nav">
    <a href="{{ route('home') }}">
        <img src="{{ $logo }}" alt="Logo of 4s" class="nav-logo"/>
    </a>
    <div class="nav-links">
        <a href="{{ $linkDasboard }}">Dashboard</a>
        <a href="{{ $linkTournaments }}">Toernooien</a>
        <a href="{{ $linkGames }}">Wedstrijden</a>
        <a href="{{ $linkTeams }}">Teams</a>
        @is('admin')
        <a href="{{ $linkUsers }}">Gebruikers</a>
        @endis
    </div>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <a href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
            Uitloggen
        </a>
    </form>
</nav>
