@props(['name', 'image', 'description', 'url', 'organization_type', 'contact', 'email', 'isShowPage' => false])

<div class="flex border rounded-lg shadow-md p-4 bg-white hover:shadow-lg transition duration-300" style="background: linear-gradient(to left, #d1f7d5, white 50%)">
    <!-- Image Section -->
    <div class="w-1/2 mr-4">
        <img src="{{ asset('images/organizations/' . $image) }}" alt="{{ $name }}" class="w-full h-auto object-cover rounded-md">
    </div>

    <!-- Text Section -->
    <div class="flex flex-col justify-between w-1/2 space-y-2">
        <h4 class="font-bold text-lg">{{ $name }}</h4>
        <p class="text-gray-600">{{ $description }}</p>

        <!-- Conditionally show extra fields if isShowPage is true -->
        @if($isShowPage)
            <p class="text-gray-800 mt-2">{{ $url }}</p>
            <p class="text-gray-600">{{ $organization_type }}</p>
            <p class="text-gray-800 mt-2">{{ $contact }}</p>
            <p class="text-gray-600">{{ $email }}</p>
        @endif
    </div>
</div>
