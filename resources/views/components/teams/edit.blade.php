@props(['team'])

<div {{ $attributes->merge(['class' => 'comp-team']) }}>

    <form action="{{ url('admin/teams/' .$team->id) }}" method="post">
        {{ method_field('PUT') }}
        {{ csrf_field() }}
        <input type="hidden" name="id" id="id" value="{{$team->id}}" />

        <label>Name</label>
        <input type="text" name="name" id="name" value="{{$team->name}}" class="form-control"><br/>
        <label>Creator Id</label>
        <input type="text" name="creator_id" id="creator_id" value="{{$team->creator_id}}" class="form-control"><br/>
        <br/>
        <button type="submit" class="btn btn-success">Update</button>
        <form action="{{url('admin/teams', [$team])}}" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input style="background-color: #000000; color: #ffffff; font-size: 30px; padding: 5px 15px;" type="submit" class="btn btn-danger" value="Delete"/>
        </form>
    </form>
</div>
