<x-layout.main>
    @if(count($topTeams) >= 5)
        <x-user.dash-topteams :topTeams="$topTeams" class="dash-item"/>
    @else
        <div class="dash-item dash-topten-notfound">
            <h1 class="dash-message">Er zijn nog niet minimaal 5 teams met een score</h1>
        </div>
    @endif
    <img src="{{ asset('img/football.jpg') }}" alt="picture of a football hitting the goal net with a background of green grass" class="dash- dash-image">
    @if(isset($tournament))
    <x-user.dash-tournament :tournament="$tournament" class="dash-item"/>
    @else
        <div class="dash-item dash-tournament-notfound">
            <h1 class="dash-message">Er is geen actief tournament aan de gang</h1>
        </div>
    @endif
    @if(isset($user->team_id))
    <x-user.dash-myteam :teamMembers="$teamMembers" :team="$team" class="dash-item" />
    @else
        <div class="dash-item dash-team-notfound">
            <h1 class="dash-message">Je hebt nog geen eigen team</h1>
        </div>
    @endif
</x-layout.main>
