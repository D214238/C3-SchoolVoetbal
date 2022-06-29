@props(['team'])

<div {{ $attributes->merge(['class' => 'comp-team']) }}>
    <table class="main-table">
        <thead class="teams-header">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>create_at</th>
            <th>update_at</th>
            <th>creator_id</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{ $team['id'] }}</td>
            <td>{{ $team['name'] }}</td>
            <td>{{ $team['created_at'] }}</td>
            <td>{{ $team['updated_at'] }}</td>
            <td>{{ $team['creator_id'] }}</td>
        </tr>
        </tbody>
    </table>
</div>
