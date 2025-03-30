<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interactive Map</title>

    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />

    <style>
        #map {
            height: 500px;
            width: 100%;
        }
    </style>
</head>
<body>

    <h1>Interactive Map of Ireland</h1>
    <div id="map"></div>

    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

    <script>
        // Initialize the map, centered on Ireland
        var map = L.map('map').setView([53.349805, -6.26031], 6);  // Coordinates for Ireland's center

        // Add OpenStreetMap tile layer
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Hardcoded locations from your seeder data
        var locations = [
            {
                name: "Glengarriff Woods Nature Reserve",
                tree_type: "Oak",
                description: "A magical woodland with ancient oak trees, mossy rocks, and a lovely river. Great for a peaceful walk!",
                latitude: 51.75,
                longitude: -9.55
            },
            {
                name: "Killarney National Park",
                tree_type: "Yew",
                description: "Home to the famous oak woodlands and stunning lakes. It's like stepping into a fairy tale!",
                latitude: 52.05,
                longitude: -9.50
            },
            {
                name: "Ballycroy National Park",
                tree_type: "Birch",
                description: "Although known for its boglands, it also contains beautiful woodlands, it is a wild and open space with amazing views.",
                latitude: 54.05,
                longitude: -9.75
            },
            {
                name: "Avondale Forest Park",
                tree_type: "Scots Pine",
                description: "Famous for its tall trees and river walks. It's a great place to explore nature and learn about trees.",
                latitude: 52.92,
                longitude: -6.20
            },
            {
                name: "Glenariff Forest Park",
                tree_type: "Ash",
                description: "Known as the 'Queen of the Glens,' it has beautiful waterfalls and trails through the woods.",
                latitude: 54.98,
                longitude: -6.02
            },
            {
                name: "Lough Key Forest",
                tree_type: "Hazel",
                description: "This park has woodland trails, a lake, and even a castle ruin. It's perfect for adventures!",
                latitude: 53.97,
                longitude: -8.24
            },
            {
                name: "Derryclare Nature Reserve",
                tree_type: "Oak",
                description: "A beautiful remote area, with stunning lake and mountain views.",
                latitude: 53.42,
                longitude: -9.92
            },
            {
                name: "Portumna Forest Park",
                tree_type: "Pine",
                description: "Located on the shore of Lough Derg this forest has many walking and cycling trails.",
                latitude: 53.09,
                longitude: -8.20
            },
            {
                name: "Tollymore Forest Park",
                tree_type: "Beech",
                description: "A magical forest with old stone bridges, rivers, and lots of history.",
                latitude: 54.25,
                longitude: -5.95
            },
            {
                name: "The Burren National Park",
                tree_type: "Thorn",
                description: "Though known for its limestone, it also has Hazel woods, and many unique plants, with beautiful scenery.",
                latitude: 53.03,
                longitude: -9.17
            }
        ];

        // Loop through each location and add a marker with a popup
        locations.forEach(function(location) {
            var marker = L.marker([location.latitude, location.longitude]).addTo(map);

            // Add a popup to the marker with the information
            marker.bindPopup(`
                <b>${location.name}</b><br>
                <strong>Tree Type:</strong> ${location.tree_type}<br>
                <strong>Description:</strong> ${location.description}<br>
                <strong>Location:</strong> Latitude: ${location.latitude}, Longitude: ${location.longitude}
            `);
        });
    </script>

</body>
</html>
