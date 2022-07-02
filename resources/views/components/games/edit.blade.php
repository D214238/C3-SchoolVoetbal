@props(['game'])

<div {{ $attributes->merge(['class' => 'comp-game']) }}>

    <form action="{{ url('admin/games/' .$game->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$game->id}}"  />

        <label for="team1_score">team1_score</label>
        <input type="text" name="name" id="team1_score" value="{{$game->team1_score}}" class="form-control"><br/

        <label for="team2_score">team2_score</label>
        <input type="text" name="name" id="team2_score" value="{{$game->team2_score}}" class="form-control"><br/>

        <label for="finished">finished</label>
        <input type="text" name="name" id="finished" value="{{$game->finished}}" class="form-control"><br/>

        <label for="is_playing">is_playing</label>
        <input type="text" name="name" id="is_playing" value="{{$game->is_playing}}" class="form-control"><br/>

        <label for="start_time">start_time</label>
        <input type="text" name="name" id="start_time" value="{{$game->start_time}}" class="form-control"><br/>


        <br/>
        <button type="submit" class="btn btn-success">Update</button>
        <form action="{{url('admin/games', [$game])}}" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" class="btn btn-danger" value="Delete"/>
        </form>
    </form>
</div>
