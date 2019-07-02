class Localizacion{

    constructor(){
        if(navigator.geolocation){
            navigator.geolocation.getCurrentPosition((position)=>{
                this.latitude = position.coords.latitude;
                this.longitude = position.coords.longitude;

            });
        }else{
            alert("Tu navegador no soporta geolocalización");
        }

    } //fin constructor

    enviarLocalizacionr(){
        document.getElementById("longitud").value = this.longitude;
        document.getElementById("latitud").value = this.latitude;

    }

} //fin clase


