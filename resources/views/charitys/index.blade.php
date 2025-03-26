<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
     crossorigin=""/>

      <!-- Make sure you put this AFTER Leaflet's CSS -->
 <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
     integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
     crossorigin=""></script>


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
                    
                    <div id="map" style="height: 1000px;"></div>

                    <script>
                        var map = L.map('map').setView([53.3520, -4.2670], 12);

                        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                        }).addTo(map);

                        L.marker([53.3520, -6.2670]).addTo(map)
                            .bindPopup('St. Vincent de Paul')
                            .openPopup();


                            L.marker([53.3432, -6.2832]).addTo(map)
                            .bindPopup('Change Clothes')
                            .openPopup();


                            L.marker([53.3600, -6.2770]).addTo(map)
                            .bindPopup('Oxfam Books')
                            .openPopup();


                            L.marker([53.3250, -6.4520]).addTo(map)
                            .bindPopup('Barnardos Charity Shop')
                            .openPopup();


                            
                    </script>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>