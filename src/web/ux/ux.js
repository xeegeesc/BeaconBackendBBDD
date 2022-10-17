//----------------------------------------------------------------------------------------------------------------------------------
//----------------------------------------------------------------------------------------------------------------------------------
//Archivo realizado por: Javier Egea Escribá
//Nombre Archivo: ux.js
//Descripción: Archivo en el que se encuentran las funciones que interactuan con la UX de la web y hace peticiones a la logica fake.
//----------------------------------------------------------------------------------------------------------------------------------
//----------------------------------------------------------------------------------------------------------------------------------


//----------------------------------------------------------------------------------------------------------------------------------
//              getUltimaMedida
/*Descripción: funcion que llama a la funcion getUltimaMedida() de la logica fake y escribe el resultado en un div de la página
 *
 *
 * No dispone de parámetros de entrada
 *
 * @returns {objeto} Devuelve un objeto (ultimaMedida) con los parámetros de cualquier medicion de la
 *                                                     BBDD(Id, Valor, Tipo, Fecha, Lat, Long).
 */
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