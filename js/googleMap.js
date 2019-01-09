var locations = [
	["Where I am", "51.508742", "-0.120850"],
	[]
];

function getLocations(lat, lng) {
	locations[1] = ["Concert", lat, lng];
	myMap();
}

function myMap() {


	var mapProp= {
	  center: new google.maps.LatLng(51.508742,-0.120850),
	  zoom: 7,
      mapTypeId: google.maps.MapTypeId.ROADMAP
 
	};

	var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
	var infowindow = new google.maps.InfoWindow();
	var marker;

	for(let i = 0; i < 2; i++) {
		if(i == 0) {
			marker = new google.maps.Marker({
				position: new google.maps.LatLng(locations[i][1], locations[i][2]),
				map: map
			});
		} else {
			marker = new google.maps.Marker({
				position: new google.maps.LatLng(locations[i][1], locations[i][2]),
				map: map
			});
		}

		google.maps.event.addListener(marker, 'click', (function(marker, i) {
			return function() {
				infowindow.setContent(locations[i][0]);
				infowindow.open(map, marker);
			}
		})(marker, i));
		
	}

	$("#googleMap").css("display", "block");
	$("#overlay").css("display", "block");
}