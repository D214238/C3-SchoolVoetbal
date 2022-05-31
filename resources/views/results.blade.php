<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p>Hier komt een overzicht met de resultaten</p>
                    <table class="table-auto">
                        <thead>
                        <tr>
                            <th class="px-4 py-2 ">Teams</th>
                            <th class="px-4 py-2 ">Score</th>
                            <th class="px-4 py-2">Weddenschap gewonnen</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="border px-4 py-2 font-medium">Team 1 vs Team 2</td>
                            <td class="border px-4 py-2 font-medium">3-1</td>
                            <td class="border px-4 py-2 font-medium">Nee</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2 font-medium">Team 3 vs Team 4</td>
                            <td class="border px-4 py-2 font-medium">1-1</td>
                            <td class="border px-4 py-2 font-medium">Ja</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2 font-medium">Team 2 vs Team 4</td>
                            <td class="border px-4 py-2 font-medium">0-2</td>
                            <td class="border px-4 py-2 font-medium">Ja</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
