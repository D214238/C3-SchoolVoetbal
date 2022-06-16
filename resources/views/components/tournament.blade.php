@props(['tournament'])
<div {{ $attributes->merge(['class' => 'comp-tournaments']) }}>
    <table class="main-table">
        <thead class="tournaments-header">
            <tr @class([
                'table-title' => Auth::user()->is('user'),
                'admin-table-title' => Auth::user()->is('admin')
                ])>
                <th class="align-left tour-title" colspan="8">Toernooi</th>
            </tr>
            @if(count($tournament['games']->where('is_playing', true)) >= 1)
                <tr class="table-header">
                    <th class="align-left" colspan="8">Speelt nu</th>
                </tr>
                <tr class="table-subheader">
                    <th>Team 1</th>
                    <th></th>
                    <th>Team 2</th>
                    <th colspan="2"></th>
                    <th>Score 1</th>
                    <th>Score 2</th>
                    <th>Tijd</th>
                </tr>
                @foreach($tournament['games']->where('is_playing', true) as $game)
                    <tr>
                        <td>{{ $game['team1']['name'] }}</td>
                        <td>vs</td>
                        <td>{{ $game['team2']['name'] }}</td>
                        <td colspan="2"></td>
                        <td>{{ $game['team1_score'] }}</td>
                        <td>{{ $game['team2_score'] }}</td>
                        <td>{{ $game['start_time'] }}</td>
                    </tr>
                @endforeach
            @endif
            <tr class="table-header">
                <th class="align-left" colspan="3">Moet nog spelen</th>
                <th class="align-left" colspan="5">Gespeelde wedstrijden</th>
            </tr>
            <tr class="table-subheader">
                <th>Team 1</th>
                <th>Team 2</th>
                <th>Tijd</th>
                <th>Team 1</th>
                <th>Team 2</th>
                <th>Score 1</th>
                <th>Score 2</th>
                <th>Tijd</th>
            </tr>
        </thead>
        <tbody class="tour-body">
            <tr>
                <td colspan="3">
                    <table class="inner-table borright">
                        @foreach($tournament['games']->where('finished', false) as $game)
                            <tr>
                                <td>{{ $game['team1']['name'] }}</td>
                                <td>{{ $game['team2']['name'] }}</td>
                                <td>{{ date('H:i', strtotime($game['start_time'])) }}</td>
                            </tr>
                        @endforeach
                        @if(count($tournament['games']->where('finished', false)) < 1)
                            <tr>
                                <td class="tour-message">Alle toernooien zijn uitgespeeld</td>
                            </tr>
                        @endif
                    </table>
                </td>
                <td colspan="5">
                    <table class="inner-table">
                        @foreach($tournament['games']->where('finished', true) as $game)
                            <tr>
                                <td>{{ $game['team1']['name'] }}</td>
                                <td>{{ $game['team2']['name'] }}</td>
                                <td>{{ $game['team1_score'] }}</td>
                                <td>{{ $game['team2_score'] }}</td>
                                <td>{{ date('H:i', strtotime($game['start_time'])) }}</td>
                            </tr>
                        @endforeach
                        @if(count($tournament['games']->where('finished', true)) < 1)
                            <tr>
                                <td class="tour-message">Er zijn nog geen toernooien gespeeld</td>
                            </tr>
                        @endif
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
</div>
