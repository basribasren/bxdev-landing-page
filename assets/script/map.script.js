function showmap() {
	// office location
	var mapPosition = {
		lat: 0.168389,
		lng: 117.475784
	};
	// map option
	var mapOptions = {
		zoom: 15,
		scrollwheel: false,
		center: mapPosition,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	var request = {
		placeId: 'ChIJN1t_tDeuEmsRUsoyG83frY4',
		fields: ['name', 'formatted_address', 'place_id', 'geometry']
	};
	// craete new map
	var map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);
	// create a marker for office place
	var bxdev = new google.maps.Marker({
		position: mapPosition,
		map: map,
		animation: google.maps.Animation.DROP,
		title: 'BXDEV office',
		icon: {
			url: 'http://maps.google.com/mapfiles/ms/icons/red-dot.png'
		}
	});

	var infoWindow = new google.maps.InfoWindow;
	// show information of office marker
	google.maps.event.addListener(bxdev, 'click', function() {
		infoWindow.setContent('<div><strong>' + 'BONTANG WEB DEVELOPMENT' + '</strong><br>' +
			'Jl. Kapal Layar 5 RT.20, Kel. Loktuan' + '<br>' +
			'Kec. Bontang Utara, 75315 Kalimantan Timur' + '</div>');
		infoWindow.open(map, this);
	});

	// detect location of user
	if (navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(function(position) {
			var pos = {
				lat: position.coords.latitude,
				lng: position.coords.longitude
			};
			// create marker of user location
			var visitor = new google.maps.Marker({
				position: pos,
				map: map,
				animation: google.maps.Animation.DROP,
				title: 'You\' are here',
				icon: {
					url: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png"
				}
			});
			// show information of user marker
			google.maps.event.addListener(visitor, 'click', function() {
				infoWindow.setContent('<div><strong>' + 'YOU ARE HERE' + '</strong></div>');
				infoWindow.open(map, this);
			});
		}, function() {
			handleLocationError(true, infoWindow, map.getCenter());
		});
	} else {
		// Browser doesn't support Geolocation
		handleLocationError(false, infoWindow, map.getCenter());
	}

	$('.mapheight').css('height', '450');
	$('.maps_text h3').hide();
}

function handleLocationError(browserHasGeolocation, infoWindow, pos) {
	infoWindow.setPosition(pos);
	infoWindow.setContent(browserHasGeolocation ?
		'Error: The Geolocation service failed.' :
		'Error: Your browser doesn\'t support geolocation.');
	infoWindow.open(map);
}

function toggleBounce() {
	if (marker.getAnimation() !== null) {
		marker.setAnimation(null);
	} else {
		marker.setAnimation(google.maps.Animation.BOUNCE);
	}
}