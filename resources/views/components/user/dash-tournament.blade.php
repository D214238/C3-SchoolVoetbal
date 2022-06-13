@props(['tournament'])
<a href="{{ route('tournaments.show', $tournament['id']) }}" {{ $attributes->merge(['class' => 'dash-tournament']) }}>
    <table class="main-table">
        <thead>
            <tr class="table-title">
                <th>Huidige Tournament</th>
                <th>{{ $tournament['start_date'] }}</th>
            </tr>
        </thead>
        <thead>
            <tr>
                <td class="nopad" colspan="2">
                    @if(count($tournament['games']->where('is_playing', true)) >= 1)
                        <table class="playingnow-table">
                            <thead>
                            <tr class="table-header"><th colspan="4">Speelt nu</th></tr>
                            </thead>
                            <tbody>
                                @foreach($tournament['games']->where('is_playing', true) as $game)
                                    <tr>
                                        <td>{{ $game['team1']['name'] }}</td>
                                        <td>{{ $game['team2']['name'] }}</td>
                                        <td>{{ $game['team1_score'] }}</td>
                                        <td>{{ $game['team2_score'] }}</td>
                                    </tr>
                             @endforeach
                            </tbody>
                        </table>
                    @endif
                </td>
            </tr>
        </thead>
        <thead>
            <tr class="table-header">
                <th>Afgespeeld</th>
                <th>Moet nog spelen</th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <td class="nopad">
                <table class="played-table">
                    <thead>
                    <tr>
                        <td>Team 1</td>
                        <td>Team 2</td>
                        <td>Score 1</td>
                        <td>Score 2</td>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($tournament['games']->where('finished', true)->take(5) as $game)
                            <tr>
                                <td>{{ $game['team1']['name'] }}</td>
                                <td>{{ $game['team2']['name'] }}</td>
                                <td>{{ $game['team1_score'] }}</td>
                                <td>{{ $game['team2_score'] }}</td>
                            </tr>
                        @endforeach
                        <tr>
                            <td>...</td>
                            <td>...</td>
                            <td>...</td>
                            <td>...</td>
                        </tr>
                    </tbody>
                </table>
            </td>
            <td class="nopad">
                <table class="toplay-table">
                    <thead>
                    <tr>
                        <td>Team 1</td>
                        <td>Team 2</td>
                        <td>Start tijd</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tournament['games']->where('finished', false)->take(5) as $game)
                        <tr>
                            <td>{{ $game['team1']['name'] }}</td>
                            <td>{{ $game['team2']['name'] }}</td>
                            <td>{{ date('H:i', strtotime($game['start_time'])) }}</td>
                        </tr>
                    @endforeach
                    <tr>
                        <td>...</td>
                        <td>...</td>
                        <td>...</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        </tbody>
    </table>
</a>
