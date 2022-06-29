@props(['team'])

<div {{ $attributes->merge(['class' => 'comp-team']) }}>

    <form action="{{ url('admin/teams/' .$team->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$team->id}}" id="id" />
        <label>Name</label>
        <input type="text" name="name" id="name" value="{{$team->name}}" class="form-control"><br/>
        <label>Creator Id</label>
        <input type="text" name="name" id="creator_id" value="{{$team->creator_id}}" class="form-control"><br/>
        <br/>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
