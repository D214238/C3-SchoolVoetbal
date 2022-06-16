@props(['tournaments', 'currTour' , 'routeName'])
<div {{ $attributes->merge(['class' => 'comp-tournaments']) }}>
    <table class="main-table">
        <thead class="tournaments-header">
        <tr @class([
            'table-title' => Auth::user()->is('user'),
            'admin-table-title' => Auth::user()->is('admin')
            ])>
            <th class="align-left tour-title" colspan="31">Toernooien</th>
        </tr>
        @if(isset($currTour))
            <tr class="table-header">
                <th colspan="31" class="align-left">Huidige toernooi</th>
            </tr>
            <tr class="table-subheader">
                <th>Id</th>
                <th colspan="2"></th>
                <th colspan="3" class="align-left">Team 1</th>
                <th></th>
                <th colspan="3" class="align-left">Team 2</th>
                <th colspan="2">Score 1</th>
                <th colspan="2">Score 2</th>
                <th colspan="3"></th>
                <th colspan="3" class="align-left">Team 1</th>
                <th>vs</th>
                <th colspan="3" class="align-left">Team 2</th>
                <th colspan="2">Score 1</th>
                <th colspan="2">Score 2</th>
                <th colspan="3">Datum</th>
            </tr>
            <tr onclick="window.location='{{ route($routeName, [$currTour['id']]) }}'" class="comp-tour-link">
                <td>{{ $currTour['id'] }}</td>
                <td colspan="2"><strong>Speelt nu:</strong></td>
                <td colspan="3" class="align-left">{{ $currTour['team1'] }}</td>
                <td>vs</td>
                <td colspan="3" class="align-left">{{ $currTour['team2'] }}</td>
                <td colspan="2">{{ $currTour['scoreTeam1'] }}</td>
                <td colspan="2">{{ $currTour['scoreTeam2'] }}</td>
                <td colspan="3"><strong>Vorige wedstrijd:</strong></td>
                <td colspan="3" class="align-left">{{ $currTour['prevTeam1'] }}</td>
                <td>vs</td>
                <td colspan="3" class="align-left">{{ $currTour['prevTeam2'] }}</td>
                <td colspan="2">{{ $currTour['prevScoreTeam1'] }}</td>
                <td colspan="2">{{ $currTour['prevScoreTeam2'] }}</td>
                <td colspan="3">{{ $currTour['date'] }}</td>
            </tr>
        @endif
        <tr class="table-header">
            <th class="align-left" colspan="31">Gespeelde toernooien</th>
        </tr>
        <tr class="table-subheader">
            <th>Id</th>
            <th class="align-left" colspan="27">Toernooi</th>
            <th colspan="3">Datum</th>
        </tr>
        </thead>
        <tbody class="tour-body">
        @foreach($tournaments as $tournament)
            <tr onclick="window.location='{{ route($routeName, [$tournament['id']]) }}'" class="comp-tour-link">
                <td>{{ $tournament['id'] }}</td>
                <td class="align-left" colspan="27">Toernooi {{ $tournament['id'] }} van {{ $tournament['start_date'] }}</td>
                <td colspan="3">{{ $tournament['start_date'] }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
