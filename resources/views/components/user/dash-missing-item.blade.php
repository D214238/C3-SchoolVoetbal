@props(['$componentName'])
<div {{ $attributes->merge(['class' => 'dash-missing']) }}>
    <table class="main-table">
        <thead>
        <tr class="table-title">
            <th class="align-left">{{ $attributes['componentName'] }}</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td class="dash-missing-info">{{ $slot }}</td>
            </tr>
        </tbody>
    </table>
</div>
