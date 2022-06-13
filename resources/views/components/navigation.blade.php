@php
if(Auth::user()->is_admin == true){
    $linkHome = route('admin.dashboard');
    $linkTournaments = route('admin.tournaments');
    $linkMatches = route('admin.matches');
    $linkTeams = route('admin.teams');
    $linkUser = route('admin.users'); // TODO implement extra link in adin navigation header
    $logo = asset('img/4S-Logo-Admin.svg');
} else{
    $linkHome = route('dashboard');
    $linkTournaments = route('tournaments');
    $linkMatches = route('matches');
    $linkTeams = route('teams');
    $logo = asset('img/4S-Logo.svg');
}
@endphp

<nav class="nav">
    <a href="{{ route('home') }}"><img src="{{ $logo }}" alt="Logo of 4s" class="nav-logo"/></a>
    <div class="nav-links">
        <a href="{{ $linkHome }}">Dashboard</a>
        <a href="{{ $linkTournaments }}">Toernooien</a>
        <a href="{{ $linkMatches }}">Wedstrijden</a>
        <a href="{{ $linkTeams }}">Teams</a>
    </div>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <a href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
            Uitloggen
        </a>
    </form>
</nav>
