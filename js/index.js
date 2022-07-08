document.addEventListener('deviceready', onDeviceReady, false);
if (typeof cordova == "undefined") {
    onDeviceReady();
}

function onDeviceReady() {
    // Cordova is now initialized. Have fun!
    console.log('Running cordova app');

    // var mapDiv = document.getElementById("cntMapa");
    // var options = {
    //     camera: {
    //       target: {lat: 42.8858658, lng: -8.5402265},
    //       zoom: 16
    //     }
    //   };
    //   var map = plugin.google.maps.Map.getMap(mapDiv, options)

    

    

}

let map;
function initMap() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position){
            var lat = position.coords.latitude;
            var lng = position.coords.longitude;

            var mapDiv = document.getElementById("cntMapa");
            map = new google.maps.Map(mapDiv, {
                center: { lat: lat, lng: lng },
                zoom: 20,
            });
            updatePosition(position);
        });
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.watchPosition(updatePosition, function(err){}, {
            enableHighAccuracy: true,
            timeout: 5000,
            maximumAge: 0
        });
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function updatePosition(position) {
    console.log(position);
    var lat = position.coords.latitude;
    var lng = position.coords.longitude;

    
    map.setCenter({ lat: lat, lng: lng });
    var icon = {
        path: "M-20,0a20,20 0 1,0 40,0a20,20 0 1,0 -40,0",
        fillColor: '#0000FF',
        fillOpacity: .8,
        anchor: new google.maps.Point(0,0),
        strokeWeight: 0,
        scale: 0.6
    }

    new google.maps.Marker({
        position: map.getCenter(),
        map,
        icon: icon,
        title: "Estás aquí",
    });
}


