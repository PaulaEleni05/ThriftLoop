<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Donations') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="font-semibold text-lg mb-4">List of Donations:</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach ($donations as $donation)
                            <div class="bg-gray-100 p-4 rounded-lg shadow-lg">
                                <!-- Donation Image -->
                                @if($donation->image)
                                    <img src="{{ asset('storage/' . $donation->image->url) }}" alt="Donation Image" class="w-full h-48 object-cover rounded-md">
                                @else
                                    <div class="h-48 bg-gray-300 flex items-center justify-center rounded-md">No Image</div>
                                @endif

                                <!-- Donation Title and Charity -->
                                <h4 class="mt-2 font-semibold text-xl text-gray-800">{{ $donation->title }}</h4>
                                <p class="text-gray-600 text-sm">Charity: {{ $donation->charity->name }}</p>
                                <p class="text-gray-600 text-sm">Category: {{ $donation->category->name }}</p>

                                <!-- Donation Description, Condition, and Status -->
                                <p class="text-gray-700 mt-2">{{ $donation->description }}</p>
                                <p class="text-sm text-gray-500">Condition: {{ ucfirst($donation->condition) }}</p>
                                <p class="text-sm text-gray-500">Status: {{ ucfirst($donation->status) }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


