var markers = [
	{location:"東京都中野区", title:"自宅"}	,
	{location:"山口県山口市", title: "目的地"}
];

var markersIdx = 0;

function initialize() {

	var latlng = new google.maps.LatLng(35.509984,135.810703);
	var opts = {
		zoom: 6,
		center: latlng,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	var map = new google.maps.Map(document.getElementById("map"), opts);

	// Create GeoCoder Instance
	var geocoder = new google.maps.Geocoder();

	markersIdx = 0;
	for(i = 0 ; markers.length > i ; i++){
		geocoder.geocode({
			address:markers[i].location
		},	function(results, status){ 
			if(status == google.maps.GeocoderStatus.OK){
				// Get Lat Lng 
				var latlng = results[0].geometry.location;

				// Get marker.title
				var title = markers[markersIdx].title;
				markersIdx = ++markersIdx;

				// Set marker option
				var marker = new google.maps.Marker({
					position:	latlng	,
					title:		title
				});

				marker.setMap(map);
			}
		});
	}
}
