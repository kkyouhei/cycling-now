function initialize() {

	var imgMarkerUrl = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=|ff0000|000000';
	var normalMarkerUrl = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=|0080ff|000000';
	// default googlemap informetion
	var centerLatlng = new google.maps.LatLng(35.409984,135.810703);
	var opts = {
		zoom: 7,
		center: centerLatlng,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	var map = new google.maps.Map(document.getElementById("map"), opts);

	// create GeoCoder Instance
	var geocoder = new google.maps.Geocoder();

	var infoWindow = new google.maps.InfoWindow();
	var markerOption = null;
	var markersIdx = 1; 
	jQuery.each(markers, function(){
		var val = this;

		// tweet with image? 
		if(val.imgUrl){
			val.content += val.imgUrl;
			markerOption = {
				  map:		map
				, position:	new google.maps.LatLng(val.lat, val.lng) 
				, icon:		imgMarkerUrl
			}
			
		}else{
			markerOption = {
				  map:		map
				, position:	new google.maps.LatLng(val.lat, val.lng) 
				, icon:		normalMarkerUrl
			}
		}

		// set marker option
		var marker = new google.maps.Marker(markerOption);

		// marker click event show infoWindow
		google.maps.event.addListener(marker, "click", function(){
			infoWindow.setContent(val.content);
			infoWindow.open(map, marker);
		});

		// set marker's infoWindow to map only first and last
		if(markersIdx == 1 || markersIdx == markers.length){
			new google.maps.InfoWindow({
				content:	val.content
			}).open(map, marker);
		}

		markersIdx += 1;
	});
}
