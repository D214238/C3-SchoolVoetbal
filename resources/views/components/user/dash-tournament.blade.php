@props(['tournament'])
<a href="{{ route('tournaments.show', $tournament['id']) }}" {{ $attributes->merge() }}>
    <table class="main-table">
        <thead>
            <tr class="table-title">
                <th class="align-left tour-title" colspan="4">Huidige Toernooi</th>
                <th></th>
                <th class="tour-date" colspan="1">{{ $tournament['start_date'] }}</th>
            </tr>
        </thead>
        @if(count($tournament['games']->where('is_playing', true)) >= 1)
        <tbody>
            <tr class="table-header">
                <th colspan="6" class="align-left">Speelt nu</th>
            </tr>
            @foreach($tournament['games']->where('is_playing', true) as $game)
                <tr>
                    <td class="align-left spread" colspan="1">{{ $game['team1']['name'] }}</td>
                    <td colspan="2">vs</td>
                    <td>{{ $game['team2']['name'] }}</td>
                    <td class="align-left">Actuele tussenstand:</td>
                    <td>{{ $game['team1_score'] }}  -  {{ $game['team2_score'] }}</td>
                </tr>
            @endforeach
        </tbody>
        @endif
        <thead>
            <tr class="table-header">
                <th class="align-left table-played-title" colspan="4">Afgespeeld</th>
                <th class="align-left" colspan="2">Moet nog spelen</th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <td class="nopad" colspan="4">
                <table class="played-table inner-table">
                    <thead>
                    <tr class="table-subheader">
                        <th class="align-left">Team 1</th>
                        <th class="align-left">Team 2</th>
                        <th>Score 1</th>
                        <th>Score 2</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($tournament['games']->where('finished', true)->take(5) as $game)
                            <tr>
                                <td class="align-left">{{ $game['team1']['name'] }}</td>
                                <td class="align-left">{{ $game['team2']['name'] }}</td>
                                <td>{{ $game['team1_score'] }}</td>
                                <td>{{ $game['team2_score'] }}</td>
                            </tr>
                        @endforeach
                        <tr>
                            <td class="align-left">...</td>
                            <td class="align-left">...</td>
                            <td>...</td>
                            <td>...</td>
                        </tr>
                    </tbody>
                </table>
            </td>
            <td class="nopad" colspan="2">
                <table class="toplay-table inner-table">
                    <thead>
                    <tr class="table-subheader">
                        <th class="align-left">Team 1</th>
                        <th class="align-left">Team 2</th>
                        <th>Start tijd</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tournament['games']->where('finished', false)->take(5) as $game)
                        <tr>
                            <td class="align-left">{{ $game['team1']['name'] }}</td>
                            <td class="align-left">{{ $game['team2']['name'] }}</td>
                            <td>{{ date('H:i', strtotime($game['start_time'])) }}</td>
                        </tr>
                    @endforeach
                    <tr>
                        <td class="align-left">...</td>
                        <td class="align-left">...</td>
                        <td>...</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        </tbody>
    </table>
</a>
