//----------------------------------------------------------------------------------------------------------------------------------
//----------------------------------------------------------------------------------------------------------------------------------
//Archivo realizado por: Javier Egea Escribá
//Nombre Archivo: logica_fake.js
//Descripción: Archivo en el que se encuentran las funciones que interactuan con la lógica del negocio del servidor realizando peticiones GET y POST.
//----------------------------------------------------------------------------------------------------------------------------------
//----------------------------------------------------------------------------------------------------------------------------------


//const ID_PUERTO = 'https://jegeesc.upv.edu.es/proyecto3a';
//const ID_PUERTO = 'https://localhost/proyecto3a';
const ID_PUERTO = 'https://192.168.0.19/proyecto3a';

//---------------------------------------------------------------------------------
//getUltimaMedida()
//---------------------------------------------------------------------------------

function getUltimaMedida() {
    return new Promise( (resolver, rechazar) => {
        $.ajax({
            url: ID_PUERTO+'/index.php',
            type: "GET",
            mode: 'cors',
            crossDomain: true,
            headers: {
                'Access-Control-Allow-Origin': '*',
            }
        }).done(function (respuesta) {
            console.log(respuesta)
            let respuestaParse = JSON.parse(respuesta)
            resolver(respuestaParse);
        })
    })//promesa
}//getUltimaMedida