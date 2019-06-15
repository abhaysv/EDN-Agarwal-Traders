		//set up markers 
		var myMarkers = {"markers": [
				{"latitude": "21.248732", "longitude":"81.615419", "icon": "img/map-marker2.png"}
			]
		};
		
		//set up map options
		$("#map").mapmarker({
			zoom	: 14,
			center	: 'Ramkund, RAIPUR',
			markers	: myMarkers
		});

