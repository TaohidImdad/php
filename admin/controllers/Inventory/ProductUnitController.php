<?php
class ProductUnitController extends Controller{
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
	if(!preg_match("/^[\s\S]+$/",$data["photo"])){
		$errors["photo"]="Invalid photo";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtIcon"])){
		$errors["icon"]="Invalid icon";
	}

*/
		if(count($errors)==0){
			$productunit=new ProductUnit();
		$productunit->name=$data["name"];
		$productunit->photo=File::upload($file["photo"], "img",$data["id"]);
		$productunit->icon=$data["icon"];

			$productunit->save();
		redirect();
		}else{
			 print_r($errors);
		}
	}
}
public function edit($id){
		view("Inventory",ProductUnit::find($id));
}
public function update($data,$file){
	if(isset($data["update"])){
	$errors=[];
/*
	if(!preg_match("/^[\s\S]+$/",$_POST["txtName"])){
		$errors["name"]="Invalid name";
	}
	if(!preg_match("/^[\s\S]+$/",$data["photo"])){
		$errors["photo"]="Invalid photo";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtIcon"])){
		$errors["icon"]="Invalid icon";
	}

*/
		if(count($errors)==0){
			$productunit=new ProductUnit();
			$productunit->id=$data["id"];
		$productunit->name=$data["name"];
		if($file["photo"]["name"]!=""){
			$productunit->photo=File::upload($file["photo"], "img",$data["id"]);
		}else{
			$productunit->photo=ProductUnit::find($data["id"])->photo;
		}
		$productunit->icon=$data["icon"];

		$productunit->update();
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
		ProductUnit::delete($id);
		redirect();
	}
	public function show($id){
		view("Inventory",ProductUnit::find($id));
	}
}
?>
