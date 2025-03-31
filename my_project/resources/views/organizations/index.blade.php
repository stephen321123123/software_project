<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{__('All Organizations') }}
        </h2>
    </x-slot>

    <x-alert-success>
        {{ session('success') }}
</x-alert-success>

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

                            <div class="mt-4 flex space-x-2">
                                <a href="{{ route('organizations.edit', $organization)}}" class="text-gray-600 bg-orange-300 hover:bg-orange-700 font-bold py-2 px-4 rounded">
                                    Edit
                                </a>

                            <form action="{{ route('organizations.destroy', $organization)}}" method="POST" onsubmit="return confirm('Are you sure that you want to delete this Organization?');">
                                @csrf 
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-gray-600 font-bold py-2 px-4 rounded">
                                    Delete 
                                </button>
                            </form>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>





                  
