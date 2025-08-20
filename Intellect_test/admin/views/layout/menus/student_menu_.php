<?php
	
 echo Menu::item([
	"name"=>"Student",		
	"icon"=>"nav-icon fa fa-users",
	"route"=>"#",
	"links"=>[
		["route"=>"student/create","text"=>"Create Cattle"],
		["route"=>"student","text"=>"Manage Cattle","icon"=>"fa fa-id-card-o nav-icon"],
	]
]);
