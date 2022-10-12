//----------------------------------------------------------------------------------------------------------------------------------
//              recibirUltimaMedida
//----------------------------------------------------------------------------------------------------------------------------------

document.querySelector("#formGetUltimaMedida").addEventListener("submit", async function(event){
    event.preventDefault();
    let dataLogin = new FormData(event.target);
    //hago la peticion get
    let ultimaMedida = await getUltimaMedida();
    let FechaBien = new Date(ultimaMedida.Fecha);
    console.log("TODAS MEDIDAS UX: "+ultimaMedida)
        //Muestro el resultado en el "div" reservado para el resultado
        document.getElementById("resultadoGETultimaMedida").textContent="IdMedicion: "+
            ultimaMedida.IdMedicion + ", Valor: "+ultimaMedida.Valor + ", TipoMedida: "+ultimaMedida.TipoMedida
            + ", Fecha: "+ FechaBien + ", Latitud: "+ultimaMedida.Latitud + ", Longitud: "+ultimaMedida.Longitud;

})//getUltimaMedida