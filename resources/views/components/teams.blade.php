@props(['teams'])
@section('content')
    <div {{ $attributes->merge(['class' => 'comp-tournaments']) }}>
        <table class="main-table">
            <a href="{{ url('/team/create') }}" class="btn btn-success btn-sm" title="Add New team">
                <i class="fa fa-plus" aria-hidden="true"></i> Add New team
            </a>
            <thead class="table-header">
            <tr>
                <th>name</th>
                <th>create_at</th>
                <th>update_at</th>
                <th>creator_id</th>
                <th>Edit</th>
            </tr>
            @foreach($teams as $team)
            </thead>
            <tbody>
            <tr>
                <td>{{ $team['name'] }}</td>
                <td>{{ $team['created_at'] }}</td>
                <td>{{ $team['updated_at'] }}</td>
                <td>{{ $team['creator_id'] }}</td>
                <td><a href="{{ URL::to('admin/teams/' . $team->id . '/edit') }}">
                        <button type="button" class="btn btn-warning">Edit</button>
                    </a>&nbsp;
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>

