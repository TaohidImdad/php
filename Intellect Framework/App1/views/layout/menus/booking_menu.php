<?php
	
 echo Menu::item([
	"name"=>"Booking",		
	"icon"=>"nav-icon fa fa-users",
	"route"=>"#",
	"links"=>[
		["route"=>"$base_url/booking/create","text"=>"Create Booking"],
		["route"=>"$base_url/booking","text"=>"Bookings","icon"=>"fa fa-id-card-o nav-icon"],
	]
]);

