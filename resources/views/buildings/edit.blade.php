<x-layouts.app>
    <div class="mx-auto max-w-6xl py-32 sm:py-48 lg:py-25">
        <form action="{{ route('buildings.update', $building_date) }}" method="POST" class="space-y-12">
            @csrf
            <div class="space-y-12">

                <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-base/7 font-semibold text-gray-900">Add new building data</h2>
                    <p class="mt-1 text-sm/6 text-gray-600">Use a permanent address where you can receive mail.</p>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                        <div class="sm:col-span-3 lg:col-span-2">
                            <label for="building-name" class="block text-sm/6 font-medium text-gray-900">Building name</label>
                            <div class="mt-2">
                                <input type="text" value="{{ $building_date->name }}" name="name" id="building-name" autocomplete="given-name" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                            @error('name')
                                <p class="mt-2 text-sm/6 text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="sm:col-span-3 lg:col-span-2">
                            <label for="building-color" class="block text-sm/6 font-medium text-gray-900">Building color</label>
                            <div class="mt-2">
                                <input type="text" value="{{ $building_date->color }}" name="color" id="building-color" autocomplete="given-name" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                            @error('color')
                                <p class="mt-2 text-sm/6 text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="sm:col-span-3 lg:col-span-2">
                            <label for="building-floors" class="block text-sm/6 font-medium text-gray-900">Building floors</label>
                            <div class="mt-2">
                                <input type="text" value="{{ $building_date->floors }}" name="floors" id="building-floors" autocomplete="given-name" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                            @error('floors')
                                <p class="mt-2 text-sm/6 text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="sm:col-span-3 lg:col-span-2">
                            <label for="building-size" class="block text-sm/6 font-medium text-gray-900">Building size</label>
                            <div class="mt-2">
                                <input type="text" value="{{ $building_date->size }}" name="size" id="building-size" autocomplete="given-name" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                            @error('size')
                                <p class="mt-2 text-sm/6 text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="sm:col-span-3 lg:col-span-2">
                            <label for="building-date" class="block text-sm/6 font-medium text-gray-900">Building date</label>
                            <div class="mt-2">
                                <input type="date" value="{{ $building_date->date_built }}" name="date_built" id="building-date" autocomplete="given-name" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                            @error('date_built')
                                <p class="mt-2 text-sm/6 text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="sm:col-span-3 lg:col-span-2">
                            <label for="building-owner-name" class="block text-sm/6 font-medium text-gray-900">Building owner name</label>
                            <div class="mt-2">
                                <input type="text" value="{{ $building_date->owner_name }}" name="owner_name" id="building-owner-name" autocomplete="given-name" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                            @error('owner_name')
                                <p class="mt-2 text-sm/6 text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-span-full">
                            <label for="building-description" class="block text-sm/6 font-medium text-gray-900">Building Description</label>
                            <div class="mt-2">
                                <textarea name="description" id="building-description" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">{{ $building_date->description }}</textarea>
                            </div>
                            <p class="mt-3 text-sm/6 text-gray-600">Write a few sentences about building.</p>
                            @error('description')
                                <p class="mt-2 text-sm/6 text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                    </div>
                </div>

            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
            <button type="submit"
            class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
            </div>

        </form>
    </div>
    </x-layouts.app>
