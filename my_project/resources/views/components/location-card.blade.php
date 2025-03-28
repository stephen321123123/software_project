@props(['name', 'tree_type', 'description', 'longitude', 'latitude'])

<div class="border rounded-lg shadow-md p-6 bg-white hover:shadow-lg transition duration-300">
    <h4 class="font-bold text-lg">{{ $name }}</h4>
    <p class="text-gray-600">{{ $tree_type }}</p>
    <p class="text-gray-800 mt-4">{{ $description }}</p>
    <p class="text-gray-600">{{ $longitude }}</p>
    <p class="text-gray-800 mt-4">{{ $latitude }}</p>
</div>
