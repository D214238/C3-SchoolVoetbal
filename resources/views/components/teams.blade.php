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
                <td>
                    <form method="POST" action="{{ url('/admin/teams' . '/' . $team->id) }}" accept-charset="UTF-8" style="display:inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Team" onclick="return confirm(&quot;Confirm delete?&quot;)">
                            <i class="fa fa-trash-o" aria-hidden="true"></i> Delete team
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>

