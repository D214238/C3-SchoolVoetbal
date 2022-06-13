@props(['topTeams'])
<a href="{{ route('teams') }}" class="dash-teams">
    <table class="table">
        <tr class="table-title"><th colspan="3">Top 5 teams</th></tr>
        <tr class="table-heading">
            <th>Nummer</th>
            <th>Teamnaam</th>
            <th>Goals</th>
        </tr>
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
    </table>
</a>
