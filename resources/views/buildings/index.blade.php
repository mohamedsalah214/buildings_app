<x-layouts.app>
<div class="mx-auto max-w-6xl py-32 sm:py-48 lg:py-25">
    <ul role="list" class="divide-y divide-gray-100">

        @foreach ($buildings_date as $building_date)
        <x-buildings.list :$building_date/>
        @endforeach

    </ul>
</div>
</x-layouts.app>
