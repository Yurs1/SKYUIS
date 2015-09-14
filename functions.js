
var map;
var icon_estacion = 'favicon.png';
var marker;

window.onload = function(){

	document.getElementById("boton3").onclick =  showruta;
	x = document.getElementById("ruta");
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
	frame.setAttribute("src", x.value+".html");
}

function initestaciones(){	
	var marker = new google.maps.Marker({
	    position: {lat: 7.1376718, lng: -73.118959},
	    map: map,
	    title: 'UIS',
	    icon: icon_estacion
  		});

	var marker = new google.maps.Marker({
	    position: {lat: 7.0876912, lng: -73.1364687},
	    map: map,
	    title: 'terminal!',
    	icon: icon_estacion
	  });

	var marker = new google.maps.Marker({
	    position: {lat: 7.1247492, lng: -73.117962},
	    map: map,
	    title: 'niños',
    	icon: icon_estacion
	  });

	var marker = new google.maps.Marker({
	    position: {lat: 7.0998583, lng: -73.1131649},
	    map: map,
	    title: 'laSalle',
    	icon: icon_estacion
	  });
	marker.setMap(map);

}


function deleteestaciones(){
alert("no sé como eliminar estaciones");

}



  