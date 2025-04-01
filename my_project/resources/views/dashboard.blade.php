<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Grid Layout with One Card per Row -->
            <div class="grid grid-cols-1 gap-6">
                <!-- Organization Link Card -->
                <x-nav-link :href="route('organizations.index')" :active="request()->routeIs('organizations.index')" class="flex border rounded-lg shadow-md p-4 bg-white hover:shadow-lg transition duration-300 no-underline focus:outline-none" style="background: linear-gradient(to left, #d1f7d5, white 50%)">
                    <div class="flex w-full">
                        <!-- Image Section (2/3 of card width) -->
                        <div class="w-2/3 mr-4">
                            <img src="images/organizations/homepage/image01.jpeg" alt="Organization Image" class="w-full h-48 object-cover rounded-md">
                        </div>

                        <!-- Text Section (1/3 of card width) -->
                        <div class="flex flex-col justify-center w-1/3 space-y-2">
                            <h4 class="font-bold text-lg text-gray-800">{{ __('Organizations') }}</h4>
                            <p class="text-gray-600 text-sm">Explore the different organizations and their goals.</p>
                        </div>
                    </div>
                </x-nav-link>

                <!-- Locations Link Card -->
                <x-nav-link :href="route('locations.index')" :active="request()->routeIs('locations.index')" class="flex border rounded-lg shadow-md p-4 bg-white hover:shadow-lg transition duration-300 no-underline focus:outline-none" style="background: linear-gradient(to left, #d1f7d5, white 50%)">
                    <div class="flex w-full">
                        <!-- Image Section (2/3 of card width) -->
                        <div class="w-2/3 mr-4">
                            <img src="images/organizations/homepage/image02.jpg" alt="Locations Image" class="w-full h-48 object-cover rounded-md">
                        </div>

                        <!-- Text Section (1/3 of card width) -->
                        <div class="flex flex-col justify-center w-1/3 space-y-2">
                            <h4 class="font-bold text-lg text-gray-800">{{ __('Forest Details') }}</h4>
                            <p class="text-gray-600 text-sm">Discover the beautiful forests and nature reserves.</p>
                        </div>
                    </div>
                </x-nav-link>

                <!-- Map Link Card -->
                <x-nav-link :href="route('map')" :active="request()->routeIs('map')" class="flex border rounded-lg shadow-md p-4 bg-white hover:shadow-lg transition duration-300 no-underline focus:outline-none" style="background: linear-gradient(to left, #d1f7d5, white 50%)">
                    <div class="flex w-full">
                        <!-- Image Section (2/3 of card width) -->
                        <div class="w-2/3 mr-4">
                            <img src="images/organizations/homepage/image03.jpg" alt="Map Image" class="w-full h-48 object-cover rounded-md">
                        </div>

                        <!-- Text Section (1/3 of card width) -->
                        <div class="flex flex-col justify-center w-1/3 space-y-2">
                            <h4 class="font-bold text-lg text-gray-800">{{ __('Inter-Active Map') }}</h4>
                            <p class="text-gray-600 text-sm">Interactive map for exploring all locations and organizations.</p>
                        </div>
                    </div>
                </x-nav-link>
            </div>
        </div>
    </div>
</x-app-layout>
