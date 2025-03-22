<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semi-bold text-xl text-gray-800 leading-tight">
            {{__('All Organisations' )}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="font-semibold text-lg mb-4">List of Organisations:</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach($organisations as $organisation)
                        <x-organisations-card 
                        :name="$organisation->name"
                        :description="$organisation->description"
                        :url="$organisation->url"
                        :organisation_type="$organisation->organisation_type"
                        :contact="$organisation->contact"
                        :email="$organisation->email"
                        />
                        @endforeach
                    </div>    
                </div>  
            </div>  
        </div>  
    </div>  
</x-app-layout>
