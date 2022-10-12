const ID_PUERTO = 'https://jegeesc.upv.edu.es/proyecto3a';
//const ID_PUERTO = 'https://192.168.0.19/proyecto3a';

//---------------------------------------------------------------------------------
//getUltimaMedida()
//---------------------------------------------------------------------------------

function getUltimaMedida() {
    return new Promise( (resolver, rechazar) => {
        $.ajax({
            url: ID_PUERTO+'/getUltimaMedida.php',
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