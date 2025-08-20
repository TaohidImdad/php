<?php
	echo Menu::item([
		"name"=>"Cattle",
		"icon"=>"nav-icon fa fa-wrench",
		"route"=>"#",
		"links"=>[
			["route"=>"cattle/create","text"=>"Create Cattle","icon"=>"far fa-circle nav-icon"],
			["route"=>"cattle","text"=>"Manage Cattle","icon"=>"far fa-circle nav-icon"],
		]
	]);
