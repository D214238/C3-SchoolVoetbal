@props(['teams'])
<div {{ $attributes->merge(['class' => 'comp-teams']) }}>
    <table class="main-table">
        <thead class="teams-header">
        @foreach($teams as $team)
            
            <tr>
                <th>name</th>
                <th>created at</th>
                <th>updated at</th>
                <th>creator id</th>
            </tr>
            <tr>
                <td>{{ $team['name'] }}</td>
                <td>{{ $team['created_at'] }}</td>
                <td>{{ $team['updated_at'] }}</td>
                <td>{{ $team['creator_id'] }}</td>
            </tr>
        @endforeach

    </table>
</div>
