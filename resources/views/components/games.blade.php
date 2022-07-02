@props(['games'])
<div {{ $attributes->merge(['class' => 'comp-games']) }}>
    <table class="main-table">
        <thead class="table-header">
            <tr>
                <th>id</th>
                <th>team1_score</th>
                <th>team2_score</th>
                <th>finished</th>
                <th>is_playing</th>
                <th>start_time</th>
                <th>edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach($games as $game)
            <tr>
                <td>{{ $game['id'] }}</td>
                <td>{{ $game['team1_score'] }}</td>
                <td>{{ $game['team2_score'] }}</td>
                <td>{{ $game['finished'] }}</td>
                <td>{{ $game['is_playing'] }}</td>
                <td>{{ $game['start_time'] }}</td>
                <td><a href="{{ URL::to('admin/games/' . $game->id . '/edit') }}">
                        <button type="button" class="btn btn-warning">Edit</button>
                    </a>&nbsp;
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
