@props(['teams'])

<div {{ $attributes->merge(['class' => 'comp-teams']) }}>
    <table class="main-table">
    <a class="btn btn-success" href="{{ route('teams.create') }}"> Create New Team</a>
        <thead class="teams-header">
            <tr>
                <th>name</th>
                <th>create_at</th>
                <th>update_at</th>
                <th>creator_id</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        @foreach($teams as $team)
            
        </thead>
        <tbody>
            <tr>
                <td>{{ $team['name'] }}</td>
                <td>{{ $team['created_at'] }}</td>
                <td>{{ $team['updated_at'] }}</td>
                <td>{{ $team['creator_id'] }}</td>
                <td><a class="btn btn-success" href="{{ route('teams.create') }}">Edit Team</a></td>
                <td><a class="btn btn-success" href="{{ route('teams.create') }}">Delete Team</a></td>
            </tr>
        @endforeach
        </tbody>

    </table>
</div>
