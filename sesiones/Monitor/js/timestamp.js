function MostrarFecha()  
{  
var nombres_dias = new Array("Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado")  
var nombres_meses = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre")  

var fecha_actual = new Date()  

dia_mes = fecha_actual.getDate();
dia_semana = fecha_actual.getDay(); 
mes = fecha_actual.getMonth() + 1;  
anio = fecha_actual.getFullYear();  

document.write(nombres_dias[dia_semana] + ", " + dia_mes + " de " + nombres_meses[mes - 1] + " de " + anio + "  | ")  
}  

//Función para el reloj

var RelojID12 = null
var RelojEjecutandose12 = false

function DetenerReloj12 () {
if(RelojEjecutandose12)
    clearTimeout(RelojID12)
RelojEjecutandose12 = false
}

function MostrarHora12 () {
var ahora = new Date()
var horas = ahora.getHours()
var minutos = ahora.getMinutes()
var segundos = ahora.getSeconds()
var meridiano

//ajusta las horas
if (horas > 12) {
    horas -= 12
    meridiano = " P.M."
} else {
    meridiano = " A.M."
    }
        
//establece las horas
if (horas < 10)
    ValorHora = "0" + horas
else
    ValorHora = "" + horas

//establece los minutos
if (minutos < 10)
    ValorHora += ":0" + minutos
else
    ValorHora += ":" + minutos
        
//establece los segundos
if (segundos < 10)
    ValorHora += ":0" + segundos
else
    ValorHora += ":" + segundos
    
ValorHora += meridiano
document.reloj12.digitos.value = ValorHora

RelojID12 = setTimeout("MostrarHora12()",1000)
RelojEjecutandose12 = true
}

function IniciarReloj12 () {
DetenerReloj12()
MostrarHora12()
}

window.onload = IniciarReloj12;
if (document.captureEvents) {           //N4 requiere invocar la funcion captureEvents
document.captureEvents(Event.LOAD)
}