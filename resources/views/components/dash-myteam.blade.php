@props(['teamMembers', 'team'])
<a href="{{ route('teams.show', $team['id']) }}" {{ $attributes->merge() }}>
    <table class="main-table">
        <thead>
        <tr @class([
        'table-title' => Auth::user()->is('user'),
        'admin-table-title' => Auth::user()->is('admin')
        ])>
            <th class="align-left">Mijn Team</th>
            <th class="table-teamname">{{ $team['name'] }}</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            @foreach($teamMembers->split(2) as $chunk)
                    <td class="nopad">
                        <table class="names-table inner-table">
                            <tbody>
                                @for($i=0; $i<6; $i++)
                                    @if($i < count($chunk))
                                        <tr><td class="align-left">- {{ $chunk[$i]['name'] }}</td></tr>
                                    @else
                                        <tr><td class="align-left">- </td></tr>
                                    @endif
                                @endfor
                            </tbody>
                        </table>
                    </td>
            @endforeach
        </tr>
        </tbody>
    </table>
</a>
