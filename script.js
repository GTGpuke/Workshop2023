
function init(){
    mapboxgl.accessToken = 'pk.eyJ1Ijoib3Vza28iLCJhIjoiY2xuYWFyMnU1MDI3MjJxbzdscHc5cHJmYSJ9.y221KJCz3nfvJ55IyAE_2g';

    //---------------------

    // let data_toilettes = fetch('api/toilettes') --> list[geoJson]
    // let data_poubelles = fetch('api/poubelles') --> list[geoJson]
    // let data_poubelles_tri = fetch('api/tri') --> list[geoJson]

    /*
       let liste_total = [
                data_toilettes.items,
                data_poubelles.items,
                data_poubelles_tri.items
            ]
    */

    /*
        const geojson = {
            type: 'FeatureCollection',
            features: liste_total
        }
    */

    //---------------------
    
    const geojson = {
        type: 'FeatureCollection',
        features: [
          {
            type: 'Feature',
            geometry: {
              type: 'Point',
              coordinates: [3.911352,43.601223]
            },
            properties: {
              title: 'Toilette',
              description: 'Public.'
            }
          },
          {
            type: 'Feature',
            geometry: {
              type: 'Point',
              coordinates: [3.904175, 43.600673]
            },
            properties: {
              title: 'Toilette',
              description: 'Public'
            }
          },
          {
            type: 'Feature',
            geometry: {
              type: 'Point',
              coordinates: [3.898974, 43.602033]
            },
            properties: {
              title: 'Toilette',
              description: 'Public'
            }
          },
          {
            type: 'Feature',
            geometry: {
              type: 'Point',
              coordinates: [3.904324, 43.600430]
            },
            properties: {
              title: 'Poubelle',
              description: 'Vert, Jaune - (tri selectif)'
            }
          },
          {
            type: 'Feature',
            geometry: {
              type: 'Point',
              coordinates: [3.915857, 43.602322]
            },
            properties: {
              title: 'Poubelle',
              description: 'Vert, Jaune - (tri selectif)'
            }
          },
          {
            type: 'Feature',
            geometry: {
              type: 'Point',
              coordinates: [3.915857, 43.601322]
            },
            properties: {
              title: 'Poubelle',
              description: 'Vert'
            }
          },
          {
            type: 'Feature',
            geometry: {
              type: 'Point',
              coordinates: [3.913510, 43.600286]
            },
            properties: {
              title: 'Poubelle',
              description: 'Jaune'
            }
          },
          {
            type: 'Feature',
            geometry: {
              type: 'Point',
              coordinates: [3.904324, 43.600430]
            },
            properties: {
              title: 'Poubelle',
              description: 'Vert, Jaune - (tri selectif)'
            }
          },
          {
            type: 'Feature',
            geometry: {
              type: 'Point',
              coordinates: [3.906212, 43.603194]
            },
            properties: {
              title: 'Poubelle',
              description: 'Orange - (Biodéchets)'
            }
          }

        ]
      };
const map = new mapboxgl.Map({
    container: 'map', // container ID
    // Choose from Mapbox's core styles, or make your own style with Mapbox Studio
    style: 'mapbox://styles/mapbox/satellite-streets-v12', // style URL
    center: [3.9, 43.6], // starting position [lng, lat]
    zoom: 9 // starting zoom
});

const layerList = document.getElementById('menu');
const inputs = layerList.getElementsByTagName('input');

for (const input of inputs) {
    input.onclick = (layer) => {
        const layerId = layer.target.id;
        map.setStyle('mapbox://styles/mapbox/' + layerId);
    };
}
map.addControl(
    new MapboxGeocoder({
    accessToken: mapboxgl.accessToken,
    mapboxgl: mapboxgl
    })
    );

// add markers to map
for (const feature of geojson.features) {
    // create a HTML element for each feature
    const el = document.createElement('div');
    if (feature.properties.title == 'Toilette')
    {
      el.className = 'toilet'
    }else if (feature.properties.title == 'Poubelle')
    {
      el.className = 'bin';
    } else if (feature.properties.title == 'marker')
    {
      el.className = 'marker';
    }
    

     
    // make a marker for each feature and add it to the map
    new mapboxgl.Marker(el)
    .setLngLat(feature.geometry.coordinates)
    .setPopup(
    new mapboxgl.Popup({ offset: 25 }) // add popups
    .setHTML(
    `<h3>${feature.properties.title}</h3><p>${feature.properties.description}</p>`
    )
    )
      .addTo(map);
}
}

init();