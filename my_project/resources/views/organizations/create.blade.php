<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{__('Create New Organizations')}}
</h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <h3 class="font-semibold text-lg mb-4">Add a New Organization:</h3>

            <x-organization-form
                :action="route('organizations.store')"
                :method="'POST'"
            />
</div>
</div>
</div>
</div>
</x-app-layout>
