@props(['teams'])
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>team Crud</h2>
                    </div>

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
                                    <a href="{{ url('/team/' . $team->id) }}" title="View team"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View team</button></a>
                                    <a href="{{ url('/team/' . $team->id . '/edit') }}" title="Edit Team"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit team</button></a>
                                    <form method="POST" action="{{ url('/student' . '/' . $team->id) }}" accept-charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Team" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete team</button>
                                    </form>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
