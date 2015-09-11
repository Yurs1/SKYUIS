

	$(document).ready(function() { 
		//alert("hola ");
			

			  map = new GMaps({
			  div: '#map',
			  lat: 7.1364639,
			  lng: -73.1172689			  
			});

			map.addMarker({
			  lat: 7.1364639,
			  lng: -73.1172689,
			  title: 'UIS',
			  click: function(e) {
			    alert('You clicked in this marker');
			  }
			});

			map.addMarker({
			  lat: 7.1247089,
			  lng: -73.1146877,
			  title: 'cabecera',
			  click: function(e) {
			    alert('You clicked in this marker');
			  }
			});

	        map.addMarker({
			  lat: 7.1174018,
			  lng: -73.1293331,
			  title: 'alcandia',
			  click: function(e) {
			    alert('You clicked in this marker');
			  }
			});

			map.addMarker({
			  lat: 7.1057879,
			  lng: -73.1141492,
			  title: 'ptsol',
			  click: function(e) {
			    alert('You clicked in this marker');
			  }
			});

			map.addMarker({
			  lat: 7.1364639,
			  lng: -73.1172689,
			  title: 'parkniños',
			  click: function(e) {
			    alert('You clicked in this marker');
			  }
			});


			map.drawRoute({
			  origin: [7.1364639, -73.1172689],
			  destination: [7.1057879, -73.1141492],
			  travelMode: 'driving',
			  strokeColor: '#131540',
			  strokeOpacity: 0.6,
			  strokeWeight: 6
			});

			map.drawRoute({
			  origin: [7.1247089,-73.1146877],
			  destination: [7.1174018,-73.1293331],
			  travelMode: 'driving',
			  strokeColor: '#E80000',
			  strokeOpacity: 0.6,
			  strokeWeight: 6
			});
});

	