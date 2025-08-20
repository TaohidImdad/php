<?php
	echo main_sidebar_dropdown([
		"name"=>"Sales",
		"icon"=>"nav-icon fa fa-bar-chart",
		"links"=>[			
			["route"=>"customer","text"=>"Manage Customer","icon"=>"far fa-circle nav-icon"],
            ["route"=>"sale/create","text"=>"Create Sales","icon"=>"far fa-circle nav-icon"],
			["route"=>"sale","text"=>"Manage Sales","icon"=>"far fa-circle nav-icon"]
		]
	]);
?>
