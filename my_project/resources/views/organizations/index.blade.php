<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{__('All Organizations') }}
        </h2>
    </x-slot>
        <!--Success alert -->
    <x-alert-success>
        {{ session('success') }}
    </x-alert-success>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="font-semibold text-lg mb-4">List of Organizations:</h3>
                    <!--The grid layout for the cards of organization -->
                    <div class="grid grid-cols-1 gap-6">
                        @foreach($organizations as $organization)
                            <div class="bg-white p-4 shadow-lg rounded-lg">
                                <!-- Organization Card Content -->
                                <a href="{{ route('organizations.show', $organization) }}">
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

                                <!-- Edit and Delete Buttons Inside the Card -->
                                <div class="mt-4 flex space-x-2">
                                    <!-- Edit Button -->
                                    <a href="{{ route('organizations.edit', $organization) }}" class="text-white bg-green-500 hover:bg-green-700 py-2 px-4 rounded-lg font-semibold">
                                        Edit
                                    </a>

                                    <!-- Delete Button Form -->
                                    <form action="{{ route('organizations.destroy', $organization) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this organization?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-white bg-red-500 hover:bg-red-700 py-2 px-4 rounded-lg font-semibold">
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
