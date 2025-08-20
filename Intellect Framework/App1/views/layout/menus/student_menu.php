<?php
	
 echo Menu::item([
	"name"=>"Student",		
	"icon"=>"nav-icon fa fa-users",
	"route"=>"#",
	"links"=>[
		["route"=>"$base_url/student/create","text"=>"Create Cattle"],
		["route"=>"$base_url/student","text"=>"Manage Cattle","icon"=>"fa fa-id-card-o nav-icon"],
	]
]);
