window.onload = function(){
    document.getElementById('boton-txt').addEventListener('click', function () { 
    var datos = obtenerDatos();
    descargarArchivo(generarTexto(datos), 'Log.txt');}, false);
    };


function descargarArchivo(contenidoEnBlob, nombreArchivo) {
    var reader = new FileReader();
    reader.onload = function (event) {
        var save = document.createElement('a');
        save.href = event.target.result;
        save.target = '_blank';
        save.download = nombreArchivo || 'archivo.dat';
        var clicEvent = new MouseEvent('click', {
            'view': window,
                'bubbles': true,
                'cancelable': true
        });
        save.dispatchEvent(clicEvent);
        (window.URL || window.webkitURL).revokeObjectURL(save.href);
    };
    reader.readAsDataURL(contenidoEnBlob);
};

//Función de ayuda: reúne los datos a exportar en un solo objeto
function obtenerDatos() {
    // aca necesitamos el query que nos trae de la BD los datos de estacion ide bus y hora.
    
    return {
        estacion: "estacion1",
        bus: "bus1",
        fecha: "123"
    };
};


//Genera un objeto Blob con los datos en un archivo TXT
function generarTexto(datos) {
    var texto = [];
    texto.push('LOG:\n');

    texto.push('\n');
    texto.push("FECHA");
    texto.push('\t');
    texto.push("BUS");
    texto.push('\t');
    texto.push("ESTACION");
    texto.push('\t');
//FOR...
    
    texto.push('\n');
    texto.push(datos.fecha);
    texto.push('\t');
    texto.push(datos.bus);
    texto.push('\t');
    texto.push(datos.estacion);
    texto.push('\t');
    //El contructor de Blob requiere un Array en el primer parámetro
    //así que no es necesario usar toString. el segundo parámetro
    //es el tipo MIME del archivo
    return new Blob(texto, {
        type: 'text/plain'
    });
};





