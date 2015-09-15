
var map;
var icon_estacion = 'favicon.png';
var marker;

window.onload = function(){


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

