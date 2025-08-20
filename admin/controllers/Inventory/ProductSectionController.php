<?php
class ProductSectionController extends Controller{
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
	if(!preg_match("/^[\s\S]+$/",$data["unit_id"])){
		$errors["unit_id"]="Invalid unit_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data["photo"])){
		$errors["photo"]="Invalid photo";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtIcon"])){
		$errors["icon"]="Invalid icon";
	}

*/
		if(count($errors)==0){
			$productsection=new ProductSection();
		$productsection->name=$data["name"];
		$productsection->unit_id=$data["unit_id"];
		$productsection->photo=File::upload($file["photo"], "img",$data["id"]);
		$productsection->icon=$data["icon"];

			$productsection->save();
		redirect();
		}else{
			 print_r($errors);
		}
	}
}
public function edit($id){
		view("Inventory",ProductSection::find($id));
}
public function update($data,$file){
	if(isset($data["update"])){
	$errors=[];
/*
	if(!preg_match("/^[\s\S]+$/",$_POST["txtName"])){
		$errors["name"]="Invalid name";
	}
	if(!preg_match("/^[\s\S]+$/",$data["unit_id"])){
		$errors["unit_id"]="Invalid unit_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data["photo"])){
		$errors["photo"]="Invalid photo";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtIcon"])){
		$errors["icon"]="Invalid icon";
	}

*/
		if(count($errors)==0){
			$productsection=new ProductSection();
			$productsection->id=$data["id"];
		$productsection->name=$data["name"];
		$productsection->unit_id=$data["unit_id"];
		if($file["photo"]["name"]!=""){
			$productsection->photo=File::upload($file["photo"], "img",$data["id"]);
		}else{
			$productsection->photo=ProductSection::find($data["id"])->photo;
		}
		$productsection->icon=$data["icon"];

		$productsection->update();
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
		ProductSection::delete($id);
		redirect();
	}
	public function show($id){
		view("Inventory",ProductSection::find($id));
	}
}
?>
