function initialize() {

	// default informetion
	var centerLatlng = new google.maps.LatLng(35.409984,135.810703);
	var opts = {
		zoom: 7,
		center: centerLatlng,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	var map = new google.maps.Map(document.getElementById("map"), opts);

	// Create GeoCoder Instance
	var geocoder = new google.maps.Geocoder();

	jQuery.each(markers, function(){
		var val = this;

		// is set
		if(val.imgUrl){
			val.content += "<br/><img src=\"" + val.imgUrl + "\" width=100px; height=70px; />";
		}


		// Set marker option
		var marker = new google.maps.Marker({
			map:		map ,
			position:	new google.maps.LatLng(val.lat, val.lng) ,
			title:		val.content
		});

		// Set to map marker
		new google.maps.InfoWindow({
			content:	val.content
		}).open(map, marker);
	});
}
