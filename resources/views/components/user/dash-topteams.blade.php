@props(['topTeams'])
<a href="{{ route('teams.index') }}" {{ $attributes->merge(['class' => 'dash-teams']) }}>
    <table class="main-table">
        <thead>
            <tr class="table-title">
                <th colspan="3">Top 5 teams</th>
            </tr>
            <tr class="table-header">
                <th class="teams-tableheading-1">Nummer</th>
                <th class="teams-tableheading-2">Teamnaam</th>
                <th class="teams-tableheading-3">Goals</th>
            </tr>
        </thead>
        <tbody>
            @for($i=0; $i<5; $i++)
                @if($i < count($topTeams))
                    <tr>
                        <td>{{ $i + 1 }}</td>
                        <td>{{ $topTeams[$i]['name'] }}</td>
                        <td>{{ $topTeams[$i]['goals'] }}</td>
                    </tr>
                @else
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                @endif
            @endfor
        </tbody>
    </table>
</a>
