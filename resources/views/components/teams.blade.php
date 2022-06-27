@props(['teams'])
      
<div {{ $attributes->merge(['class' => 'comp-teams']) }}>
    <table class="main-table">
        <thead class="teams-header">
            <tr>
                <th>name</th>
                <th>create_at</th>
                <th>update_at</th>
                <th>creator_id</th>
            </tr>
        @foreach($teams as $team)
            
        </thead>
        <tbody>
            <tr>
                <td>{{ $team['name'] }}</td>
                <td>{{ $team['created_at'] }}</td>
                <td>{{ $team['updated_at'] }}</td>
                <td>{{ $team['creator_id'] }}</td>
            </tr>
        @endforeach
        </tbody>

    </table>
</div>
