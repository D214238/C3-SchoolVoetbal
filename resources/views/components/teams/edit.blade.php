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
            <th>action</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{ $team['id'] }}</td>
            <td>{{ $team['name'] }}</td>
            <td>{{ $team['created_at'] }}</td>
            <td>{{ $team['updated_at'] }}</td>
            <td>{{ $team['creator_id'] }}</td>
            <form action="{{url('admin/teams', [$team])}}" method="POST">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="btn btn-danger" value="Delete"/>
            </form>
        </tr>
        </tbody>
    </table>
</div>
