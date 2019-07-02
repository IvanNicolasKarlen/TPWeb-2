google.maps.event.addDomListener(window, 'load', function(){
    const ubicacion = new Localizacion(()=>{

        const options = {
            center : {
                lat: -34.6705129,
                lng: -58.5650539
            }, //fin del center
            zoom: 15
        } //fin del options

        var mapita = document.getElementById('map');

        map = new google.maps.Map(mapita, options);

    }); //fin del () new Localizacion

    var autocompletar = document.getElementById('direccion');

    var buscar = new google.maps.places.Autocomplete(autocompletar);
    buscar.bindTo('bounds', map);
});
