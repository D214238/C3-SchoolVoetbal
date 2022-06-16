<x-layout.main>
    @if(count($topTeams) >= 5)
        <x-dash-topteams :topTeams="$topTeams" routeName="admin.teams.index" class="dash-item dash-teams"/>
    @else
        <x-dash-missing-item componentName="Top Teams" routeName="admin.teams.index" class="dash-item dash-teams" >
            <h1>Er zijn nog niet minimaal 5 teams met een score</h1>
            <h1>Klik hier om alle teams te bekijken</h1>
        </x-dash-missing-item>
    @endif
    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank" class="dash-item dash-image">
        <img src="{{ asset('img/football.png') }}"
             alt="illustration of 3 people playing with a football with plants and a city in the background">
    </a>
    @if(isset($tournament))
        <x-dash-tournament :tournament="$tournament" routeName="admin.tournaments.index" class="dash-item dash-tournament" />
    @else
        <x-dash-missing-item class="dash-item dash-tournament" routeName="admin.tournaments.index" componentName="Toernooi">
            <h1>Er is geen actief toernooi aan de gang</h1>
            <h1>Klik hier om alle toernooien te bekijken</h1>
        </x-dash-missing-item>
    @endif
    @if(isset($latestUsers))
        <x-dash-latestUsers :users="$latestUsers" routeName="admin.users.index" class="dash-item dash-team" />
    @else
        <x-dash-missing-item componentName="Mijn Team" routeName="admin.users.index" class="dash-item dash-team" >
            <h1>Er zijn geen gebruikers</h1>
            <h1>Klik hier om naar het gebruikers panel te gaan</h1>
        </x-dash-missing-item>
    @endif
</x-layout.main>
