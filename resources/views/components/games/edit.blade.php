@props(['game'])

<div {{ $attributes->merge(['class' => 'comp-game']) }}>

    <form action="{{ url('admin/games/' .$game->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$game->id}}" id="id" />
        <label>Name</label>
        <input type="text" name="name" id="name" value="{{$game->name}}" class="form-control"><br/>
        <label>Creator Id</label>
        <input type="text" name="name" id="creator_id" value="{{$game->creator_id}}" class="form-control"><br/>
        <br/>R
        <button type="submit" class="btn btn-success">Update</button>
        <form action="{{url('admin/games', [$game])}}" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" class="btn btn-danger" value="Delete"/>
        </form>
    </form>
</div>
