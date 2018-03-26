mapboxgl.accessToken = 'pk.eyJ1IjoibW9kemVsMTk5MCIsImEiOiJjamN0OG8waTYwZzkxMnh2dHE0eWt0encwIn0.k6eXvbVH8mV8Nq_yqvrXvA';
var map = new mapboxgl.Map({
container: 'map',
style: 'mapbox://styles/mapbox/streets-v10',
center: [-1.131372400000032, 53.51351769999999],
zoom: 9
});

/* MAP DETAILS */

map.on('load', function () {
// Add a layer showing the places.
map.addLayer({
    "id": "places",
    "type": "symbol",
    "source": {
        "type": "geojson",
        "data": {
            "type": "FeatureCollection",
            "features": [{
                "type": "Feature",
                "properties": {
                    "description": "<strong>Doncaster Innovation Centre</strong><p><a href=\"http://www.doncasterbic.com/\" target=\"_blank\" title=\"Opens in a new window\">Doncaster Innovation Centre</a> is great place for small companies to run their business and grow like a kids do!</p>",
                    "icon": "theatre"
                },
                "geometry": {
                    "type": "Point",
                    "coordinates": [-1.131372400000032, 53.51351769999999]
                }
            },]
        }
    },
    "layout": {
        "icon-image": "{icon}-15",
        "icon-allow-overlap": true
    }
});

// When a click event occurs on a feature in the places layer, open a popup at the
// location of the feature, with description HTML from its properties.
map.on('click', 'places', function (e) {
    new mapboxgl.Popup()
        .setLngLat(e.features[0].geometry.coordinates)
        .setHTML(e.features[0].properties.description)
        .addTo(map);
});

// Change the cursor to a pointer when the mouse is over the places layer.
map.on('mouseenter', 'places', function () {
    map.getCanvas().style.cursor = 'pointer';
});

// Change it back to a pointer when it leaves.
map.on('mouseleave', 'places', function () {
    map.getCanvas().style.cursor = '';
});
});

// Add zoom and rotation controls to the map.
map.addControl(new mapboxgl.NavigationControl());
