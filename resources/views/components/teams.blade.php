@props(['teams'])
<div {{ $attributes->merge(['class' => 'comp-tournaments']) }}>
    <table class="main-table">
        <thead class="tournaments-header">
        @foreach($teams as $team)
            <tr>
                <td>{{ $team['name'] }}</td>

            </tr>
        @endforeach

    </table>
</div>
