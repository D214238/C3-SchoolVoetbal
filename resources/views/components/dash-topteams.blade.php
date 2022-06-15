@props(['topTeams'])
<a href="{{ route('teams.index') }}" {{ $attributes->merge() }}>
    <table class="main-table">
        <thead>
            <tr @class([
        'table-title' => Auth::user()->is('user'),
        'admin-table-title' => Auth::user()->is('admin')
        ])>
                <th colspan="7" class="align-left">Top 5 teams</th>
            </tr>
            <tr class="table-header">
                <th class="teams-tableheading-1">Nmr</th>
                <th class="teams-tableheading-2 align-left" colspan="4">Teamnaam</th>
                <th class="teams-tableheading-3" colspan="2">Goals</th>
            </tr>
        </thead>
        <tbody>
            @for($i=0; $i<5; $i++)
                @if($i < count($topTeams))
                    <tr>
                        <td>{{ $i + 1 }}</td>
                        <td class="align-left" colspan="4">{{ $topTeams[$i]['name'] }}</td>
                        <td colspan="2">{{ $topTeams[$i]['goals'] }}</td>
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
