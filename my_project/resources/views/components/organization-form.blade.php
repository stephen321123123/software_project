@props(['action', 'method', 'organization'])

<form action="{{ $action }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if($method === 'PUT' || $method === 'PATCH')
        @method($method)
    @endif

    <!-- Title -->
    <div class="mb-4">
        <label for="name" class="block text-sm text-gray-700">Name</label>
        <input
            type="text"
            name="name"
            id="name"
            value="{{ old('name', $organization->name ?? '') }}"
            required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
        />
        @error('name')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <!-- Image -->
    <div class="mb-4">
        <label for="image" class="block text-sm font-medium text-gray-700">Organization Cover Image</label>
        <input
            type="file"
            name="image"
            id="image"
            @if(!isset($organization)) required @endif
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
        />
        @error('image')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <!-- Description -->
    <div class="mb-4">
        <label for="description" class="block text-sm text-gray-700">Description</label>
        <textarea
            name="description"
            id="description"
            rows="3"
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
            required
        >{{ old('description', $organization->description ?? '') }}</textarea>
        @error('description')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <!-- URL -->
    <div class="mb-4">
        <label for="url" class="block text-sm text-gray-700">Website URL</label>
        <input
            type="url"
            name="url"
            id="url"
            value="{{ old('url', $organization->url ?? '') }}"
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
        />
        @error('url')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <!-- Organization Type -->
    <div class="mb-4">
        <label for="organization_type" class="block text-sm text-gray-700">Organization Type</label>
        <input
            type="text"
            name="organization_type"
            id="organization_type"
            value="{{ old('organization_type', $organization->organization_type ?? '') }}"
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
        />
        @error('organization_type')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <!-- Contact -->
    <div class="mb-4">
        <label for="contact" class="block text-sm text-gray-700">Contact</label>
        <input
            type="text"
            name="contact"
            id="contact"
            value="{{ old('contact', $organization->contact ?? '') }}"
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
        />
        @error('contact')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <!-- Email -->
    <div class="mb-4">
        <label for="email" class="block text-sm text-gray-700">Email</label>
        <input
            type="email"
            name="email"
            id="email"
            value="{{ old('email', $organization->email ?? '') }}"
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
        />
        @error('email')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <!-- Existing Image (If updating) -->
    @isset($organization->image)
        <div class="mb-4">
            <img src="{{ asset($organization->image) }}" alt="Organization Cover" class="w-24 h-32 object-cover">
        </div>
    @endisset

    <!-- Submit Button -->
    <div>
        <x-primary-button>
            {{ isset($organization) ? 'Update Organization' : 'Add Organization' }}
        </x-primary-button>
    </div>
</form>
