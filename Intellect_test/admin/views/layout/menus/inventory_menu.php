
<?php
	echo Menu::item([
		"name"=>"Inventroy",
		"icon"=>"nav-icon fa fa-cubes",
		"route"=>"#",
		"links"=>[
			["route"=>"productunit","text"=>"Manage Unit","icon"=>"far fa-circle nav-icon"],
			["route"=>"productsection","text"=>"Manage Section","icon"=>"far fa-circle nav-icon"],
			["route"=>"productcategory","text"=>"Manage Category","icon"=>"far fa-circle nav-icon"],
			["route"=>"uom","text"=>"Manage Uom","icon"=>"far fa-circle nav-icon"],
			["route"=>"product","text"=>"Manage Products","icon"=>"far fa-circle nav-icon"],
			["route"=>"manufacturer","text"=>"Manage Manufacturers","icon"=>"far fa-circle nav-icon"],
			["route"=>"productbrand","text"=>"Manage Brand","icon"=>"far fa-circle nav-icon"],
			["route"=>"warehouse","text"=>"Manage Warehouses","icon"=>"far fa-circle nav-icon"],
		]
	]);
?>

