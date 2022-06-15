@props(['componentName', 'routeName'])
<a href="{{ route($routeName) }}"  {{ $attributes->merge(['class' => 'dash-missing']) }}>
    <table class="main-table">
        <thead>
        <tr @class([
        'table-title' => Auth::user()->is('user'),
        'admin-table-title' => Auth::user()->is('admin')
        ])>
            <th class="align-left">{{ $componentName }}</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td class="dash-missing-info">{{ $slot }}</td>
        </tr>
        </tbody>
    </table>
</a>
