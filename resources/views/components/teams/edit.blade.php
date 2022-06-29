@props(['team'])

<div {{ $attributes->merge(['class' => 'comp-team']) }}>

    <form action="{{ url('admin/teams/' .$team->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$team->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$team->name}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
</div>
