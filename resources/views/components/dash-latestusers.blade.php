@props(['Users'])
<a href="{{ route('admin.users.index') }}" {{ $attributes->merge() }}>
    <table class="main-table">
        <thead>
        <tr @class([
        'table-title' => Auth::user()->is('user'),
        'admin-table-title' => Auth::user()->is('admin')
        ])>
            <th class="align-left" colspan="7">Laats toegevoegde gebruikers</th>
        </tr>
        <tr class="table-header">
            <th class="users-dash-tableheading-1">Id</th>
            <th class="align-left" colspan="4">Naam</th>
            <th class="align-left" colspan="2">Team naam</th>
        </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td class="align-left" colspan="4">{{ $user->name }}</td>
                    <td class="align-left" colspan="2">{{ $user->team_id ? $user->team()->first()->name : '-' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</a>
