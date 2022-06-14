<x-layout.main>
    @if(count($topTeams) >= 5)
        <x-user.dash-topteams :topTeams="$topTeams" class="dash-item dash-teams"/>
    @else
        <x-user.dash-missing-item componentName="Top Teams" class="dash-item dash-teams" >
            <h1>Er zijn nog niet minimaal 5 teams met een score</h1>
        </x-user.dash-missing-item>
    @endif
    <img src="{{ asset('img/football.png') }}" alt="picture of a football hitting the goal net with a background of green grass" class="dash-item dash-image">
    @if(isset($tournament))
    <x-user.dash-tournament :tournament="$tournament" class="dash-item dash-tournament" />
    @else
            <x-user.dash-missing-item class="dash-item dash-tournament" componentName="Toernooi">
                <h1>Er is geen actief tournament aan de gang</h1>
            </x-user.dash-missing-item>
    @endif
    @if(isset($user->team_id))
    <x-user.dash-myteam :teamMembers="$teamMembers" :team="$team" class="dash-item dash-team" />
    @else
        <x-user.dash-missing-item componentName="Mijn Team" class="dash-item dash-team" >
            <h1>Je hebt nog geen eigen team</h1>
        </x-user.dash-missing-item>
    @endif
</x-layout.main>
