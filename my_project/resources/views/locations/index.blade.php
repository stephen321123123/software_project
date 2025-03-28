<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{__('All Locations') }}
        </h2>
    </x-slot>

    <x-alert-success>
        {{ session('success') }}
</x-alert-success>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="font-semibold text-lg mb-4">Maps:</h3>
                    <div class="grid grid-cols1 gap-6">
                        @foreach($locations as $location)
                            <a href="{{ route('locations.show', $location)}}">
                                <x-location-card
                                    :name="$location->name"
                                    :tree_type="$location->tree_type"
                                    :description="$location->description"
                                    :latitude="$location->latitude"
                                    :longitude="$location->longitude"
                                />
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>








                  
