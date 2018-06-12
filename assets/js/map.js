function init_map() {
	var myOptions = {
		zoom: 10,
		center: new google.maps.LatLng(8.224475461005367, 79.72556685233553),
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
	marker = new google.maps.Marker({
		map: map,
		position: new google.maps.LatLng(8.224475461005367, 79.72556685233553)
	});
	infowindow = new google.maps.InfoWindow({
		content: '<strong>Orca Beach Resort Ltd.</strong><br>Kalpitiya, Puttalam, Srilanka<br>'
	});
	google.maps.event.addListener(marker, 'click', function () {
		infowindow.open(map, marker);
	});
	infowindow.open(map, marker);
}
google.maps.event.addDomListener(window, 'load', init_map);
