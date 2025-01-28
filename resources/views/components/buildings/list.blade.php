@props(['building_date'])

<li class="flex justify-between gap-x-6 py-5">
    <div class="flex min-w-0 gap-x-4">
        <img class="size-12 flex-none rounded-full bg-gray-50" src="https://t4.ftcdn.net/jpg/02/81/89/73/360_F_281897358_3rj9ZBSZHo5s0L1ug7uuIHadSxh9Cc75.jpg" alt="">
        <div class="min-w-0 flex-auto">
            <a href="{{ route('buildings.show', $building_date) }}" class="block">
                <p class="text-sm/6 font-semibold text-gray-900">{{ $building_date->name }}</p>
                <p class="mt-1 truncate text-xs/5 text-gray-500">{{ $building_date->owner_name }}</p>
            </a>
        </div>
    </div>
    <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
        <p class="text-sm/6 text-gray-900">Size / {{ $building_date->size }}</p>
        <p class="text-sm/6 text-gray-900">Color / {{ $building_date->color }}</p>
        <p class="text-sm/6 text-gray-900">Floors / {{ $building_date->floors }}</p>
        <p class="mt-1 text-xs/5 text-gray-500">Built date / <time datetime="2023-01-23T13:23Z">{{ $building_date->date_built }}</time>
        <p class="mt-1 text-xs/5 text-gray-500">{{ $building_date->description }}</time>
        </p>
    </div>
</li>
