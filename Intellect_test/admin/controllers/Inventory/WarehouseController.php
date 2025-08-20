<?php
class WarehouseController extends Controller{
	public function __construct(){
	}
	public function index(){
		view("Inventory");
	}
	public function create(){
		view("Inventory");
	}
public function save($data,$file){
	if(isset($data["create"])){
	$errors=[];
/*
	if(!preg_match("/^[\s\S]+$/",$_POST["txtName"])){
		$errors["name"]="Invalid name";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtCity"])){
		$errors["city"]="Invalid city";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtContact"])){
		$errors["contact"]="Invalid contact";
	}

*/
		if(count($errors)==0){
			$warehouse=new Warehouse();
		$warehouse->name=$data["name"];
		$warehouse->city=$data["city"];
		$warehouse->contact=$data["contact"];

			$warehouse->save();
		redirect();
		}else{
			 print_r($errors);
		}
	}
}
public function edit($id){
		view("Inventory",Warehouse::find($id));
}
public function update($data,$file){
	if(isset($data["update"])){
	$errors=[];
/*
	if(!preg_match("/^[\s\S]+$/",$_POST["txtName"])){
		$errors["name"]="Invalid name";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtCity"])){
		$errors["city"]="Invalid city";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtContact"])){
		$errors["contact"]="Invalid contact";
	}

*/
		if(count($errors)==0){
			$warehouse=new Warehouse();
			$warehouse->id=$data["id"];
		$warehouse->name=$data["name"];
		$warehouse->city=$data["city"];
		$warehouse->contact=$data["contact"];

		$warehouse->update();
		redirect();
		}else{
			 print_r($errors);
		}
	}
}
	public function confirm($id){
		view("Inventory");
	}
	public function delete($id){
		Warehouse::delete($id);
		redirect();
	}
	public function show($id){
		view("Inventory",Warehouse::find($id));
	}
}
?>
