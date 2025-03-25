@props(['name', 'image', 'description', 'url', 'organization_type', 'contact', 'email', 'isShowPage' => false])

<div class="border rounded-lg shadow-md p-6 bg-white hover:shadow-lg transition duration-300">
    <h4 class="font-bold text-lg">{{ $name }}</h4>
    <img src="{{asset( 'images/organizations/' . $image)}}" alt="{{$name}}" class="w-50 h-32 object-cover rounded-md my-4">
    <p class="text-gray-600">{{ $description }}</p>

    <!-- Conditionally show extra fields if isShowPage is true -->
    @if($isShowPage)
        <p class="text-gray-800 mt-4">{{ $url }}</p>
        <p class="text-gray-600">{{ $organization_type }}</p>
        <p class="text-gray-800 mt-4">{{ $contact }}</p>
        <p class="text-gray-600">{{ $email }}</p>
    @endif
</div>
