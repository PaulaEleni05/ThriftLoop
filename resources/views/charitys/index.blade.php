

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Charities') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="font-semibold text-lg mb-4">Map of all Charities:</h3>
                    
                    <div id="map" style="height: 400px;"></div>

                    <script>
                        var map = L.map('map').setView([51.505, -0.09], 13);

                        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                        }).addTo(map);

                        L.marker([51.5, -0.09]).addTo(map)
                            .bindPopup('A pretty CSS popup.<br> Easily customizable.')
                            .openPopup();
                    </script>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>