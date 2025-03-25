<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{__('All Organizations') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="font-semibold text-lg mb-4">List of Organizations:</h3>
                    <div class="grid grid-cols1 gap-6">
                        @foreach($organizations as $organization)
                            <a href="{{ route('organizations.show', $organization)}}">
                                <x-organization-card
                                    :name="$organization->name"
                                    :image="$organization->image"
                                    :description="\Illuminate\Support\Str::limit($organization->description, 100)"
                                    :url="$organization->url"
                                    :organization_type="$organization->organization_type"
                                    :contact="$organization->contact"
                                    :email="$organization->email"
                                />
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>





                  
