<div {{ $attributes->merge(['class' => 'comp-team']) }}>

    <form action="{{ url('admin/teams') }}" method="post">
        {!! csrf_field() !!}
        @method("POST")
        <input type="hidden" name="id" id="id" value="" id="id" />
        <label>Name</label>
        <input type="text" name="name" id="name" value="" class="form-control"><br/>
        <label>Creator Id</label>
        <input type="text" name="name" id="creator_id" value="" class="form-control"><br/>
        <br/>
        <button type="submit" class="btn btn-success">Create</button>
    </form>
</div>
