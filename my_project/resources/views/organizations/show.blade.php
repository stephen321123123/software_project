<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Organization: ' . $organization->name) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
<!--Passing details into the organization card -->
<!--isShowPage can is used for styling and extra info in side the card (in my case) -->
                    <x-organization-card
                        :name="$organization->name"
                        :image="$organization->image"
                        :description="$organization->description"
                        :url="$organization->url"
                        :organization_type="$organization->organization_type"
                        :contact="$organization->contact"
                        :email="$organization->email"
                        :isShowPage="true" 
                    />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
