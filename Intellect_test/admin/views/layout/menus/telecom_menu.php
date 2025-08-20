<?php
	echo Menu::item([
		"name"=>"Telecom",
		"icon"=>"nav-icon fa fa-wrench",
		"route"=>"#",
		"links"=>[
			["route"=>"telecom/create","text"=>"Create Telecom","icon"=>"far fa-circle nav-icon"],
			["route"=>"telecom","text"=>"Manage Telecom","icon"=>"far fa-circle nav-icon"],
		]
	]);
