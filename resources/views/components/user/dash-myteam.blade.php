@props(['teamMembers', 'team'])
<a href="{{ route('teams.show', $team['id']) }}" {{ $attributes->merge(['class' => 'dash-team']) }}>
    <table class="main-table">
        <thead>
        <tr><th>Mijn Team</th><th>{{ $team['name'] }}</th></tr>
        </thead>
        <tbody>
        <tr>
            @foreach($teamMembers->split(2) as $chunk)
                    <td class="nopad">
                        <table class="names-table">
                            @for($i=0; $i<6; $i++)
                                @if($i < count($chunk))
                                    <tbody>
                                    <tr><td>- {{ $chunk[$i]['name'] }}</td></tr>
                                    </tbody>
                                @else
                                    <tbody>
                                    <tr><td>- </td></tr>
                                    </tbody>
                                @endif
                            @endfor
                        </table>
                    </td>
            @endforeach
        </tr>
        </tbody>
    </table>
</a>
