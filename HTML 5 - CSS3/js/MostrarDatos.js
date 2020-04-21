window.addEventListener("load", comenzar, false);

function comenzar(){

    var btbuscar = document.getElementById("btbuscar");
    btbuscar.addEventListener("click", mostrarResultado, false);

    
}

function mostrarResultado(){

    var origen = document.getElementById("idOrigen").value;
    var clase = document.getElementById("idClase").value;

    if(clase==1){
        var tipoClase = "Clase turista";
    }else if(clase==2){
        var tipoClase = "Turista premium";
    }else if(clase==3){
        var tipoClase = "Business";
    }else{
        var tipoClase = "Primera linea";
    }

    var resultado = document.getElementById("resultado");

    resultado.innerHTML = "<p> Salida desde " + origen + " el 23/05/2020 hasta el 27/05/2020 en " + tipoClase + " por tan solo 80€</p>";
    document.getElementById("botones").style.display = 'block';
    
}



