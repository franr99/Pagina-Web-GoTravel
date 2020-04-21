window.addEventListener("load", comenzar, false);

function comenzar(){

    var btbuscar = document.getElementById("btbuscar");
    btbuscar.addEventListener("click", lecturaDatos, false);

    
}

function lecturaDatos(){

    var origen = document.getElementById("idOrigen").value;
    var clase = document.getElementById("idClase").value;
    var fecha_ini = document.getElementById("idFecha_ini").value;
    var fecha_fin = document.getElementById("idFecha_fin").value;
    var adulto = document.getElementById("idAdulto").value;
    var nino = document.getElementById("idNino").value;
    var tipoOrigen = ["Madrid", "Barcelona", "Sevilla", "Valencia", "Cadiz", "Bilbao"];
    var tipoClase = ["Clase turista", "Turista premium", "Business", "Primera linea"];
    
    var idOrigen = tipoOrigen[origen];
    var idClase = tipoClase[clase];

    sessionStorage.setItem("origen", idOrigen);
    sessionStorage.setItem("clase", idClase);
    sessionStorage.setItem("fecha_ini", fecha_ini);
    sessionStorage.setItem("fecha_fin", fecha_fin);
    sessionStorage.setItem("adulto", adulto);
    sessionStorage.setItem("nino", nino);


    if(fecha_ini=="" || fecha_fin=="" || adulto==0){
        alert("Por favor rellene todos los campos");
    }else{
        almacenarSesion();
    }
    
}

function almacenarSesion(){

    var origen = sessionStorage.getItem("origen");
    var clase = sessionStorage.getItem("clase");
    var fecha_ini = sessionStorage.getItem("fecha_ini");
    var fecha_fin = sessionStorage.getItem("fecha_fin");
    var adulto = sessionStorage.getItem("adulto");
    var nino = sessionStorage.getItem("nino");

    var resultado1 = document.getElementById("resultado1");
    var resultado2 = document.getElementById("resultado2");
    var resultado3 = document.getElementById("resultado3");
 
    resultado1.innerHTML = "<p> Salida desde " + origen + " en fecha " + fecha_ini + " hasta el " + fecha_fin + " para " + adulto + " adultos y " + nino + " niños en clase " + clase + ".</p>";
    document.getElementById("boton1").style.display = 'block';

    resultado2.innerHTML = "<p> Salida desde " + origen + " en fecha " + fecha_ini + " hasta el " + fecha_fin + " para " + adulto + " adultos y " + nino + " niños en clase " + clase + ".</p>";
    document.getElementById("boton2").style.display = 'block';

    resultado3.innerHTML = "<p> Salida desde " + origen + " en fecha " + fecha_ini + " hasta el " + fecha_fin + " para " + adulto + " adultos y " + nino + " niños en clase " + clase + ".</p>";
    document.getElementById("boton3").style.display = 'block';

}



