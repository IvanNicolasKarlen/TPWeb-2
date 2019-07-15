function iniciarMap(){
    var loc = new Localizacion();
    if(loc.latitude === undefined){
        var coord = {lat:-34.5956145 ,lng: -58.4431949};
    }else{
        var coord = {lat: loc.latitude,lng:loc.longitude};
    }


    var map = new google.maps.Map(document.getElementById('map'),{
        zoom: 15,
        center: coord
    });
    var marker = new google.maps.Marker({
        position: coord,
        map: map
    });

    const search = new google.maps.places.Autocomplete(document.getElementById('direccion'));
    search.bindTo('bounds', map);
    search.addListener('place_changed',function () {
        marker.setVisible(false);

        var place = search.getPlace();

        if(!place.geometry.viewport){
            window.alert("Error al mostrar el lugar");
            return;
        }

        if(place.geometry.viewport){
            map.fitBounds(place.geometry.viewport);
        }else{
            map.setCenter(place.geometry.location);
            map.setZoom(20);
        }
        marker.setPosition(place.geometry.location);
        marker.setVisible(true);
        document.getElementById('latitud').value = place.geometry.location.lat();
        document.getElementById('longitud').value =place.geometry.location.lng();
    });
}

function iniciarMap2(){
    var lat = document.getElementById('lat');
    var lng = document.getElementById('lng');
    var coord= { lat : lat,
                 lng : lng
                };
    var map = new google.maps.Map(document.getElementById('map'),{
        zoom: 15,
        center: coord
    });
    var marker = new google.maps.Marker({
        position: coord,
        map: map
    });
}
