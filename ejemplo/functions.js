
var map;
var icon_estacion = 'favicon.png';
var marker;

window.onload = function(){


	document.getElementById("frecuencia").onclick=actualizar;
    document.getElementById("acelerar").onclick=acelerar;
    document.getElementById("desacelerar").onclick=desacelerar;
    x = document.getElementById("ruta");
	x.onchange =  showruta;
	
	};

function initMap() {
  var myLatLng = {lat: 7.1024639, lng: -73.1172689};
    map = new google.maps.Map(document.getElementById('map'), {
    zoom: 13,
    center: myLatLng
  	});
}

function showruta()
{
	var frame = document.getElementById("frame");
	frame.setAttribute("src", "../"+x.value+"Autorefresh.html");
}

function actualizar()
{
	h=document.getElementById("horas").value;
	m=document.getElementById("minutos").value;
	s=document.getElementById("segundos").value;
	alert(h+m+s);
}

function acelerar()
{
  alert("Se ha enviado el mensaje de acelerar al conductor");
}

function desacelerar()
{
  alert("Se ha enviado el mensaje de desacelerar al conductor");
}
