<?php
class TelecomController extends Controller{
	public function __construct(){
	}
	public function index(){
		view("Hotline");
	}
	public function create(){
		view("Hotline");
	}
public function save($data,$file){
	if(isset($data["create"])){
	$errors=[];
/*
	if(!preg_match("/^[\s\S]+$/",$_POST["txtName"])){
		$errors["name"]="Invalid name";
	}

*/
		if(count($errors)==0){
			$telecom=new Telecom();
		$telecom->name=$data["name"];

			$telecom->save();
		redirect();
		}else{
			 print_r($errors);
		}
	}
}
public function edit($id){
		view("Hotline",Telecom::find($id));
}
public function update($data,$file){
	if(isset($data["update"])){
	$errors=[];
/*
	if(!preg_match("/^[\s\S]+$/",$_POST["txtName"])){
		$errors["name"]="Invalid name";
	}

*/
		if(count($errors)==0){
			$telecom=new Telecom();
			$telecom->id=$data["id"];
		$telecom->name=$data["name"];

		$telecom->update();
		redirect();
		}else{
			 print_r($errors);
		}
	}
}
	public function confirm($id){
		view("Hotline");
	}
	public function delete($id){
		Telecom::delete($id);
		redirect();
	}
	public function show($id){
		view("Hotline",Telecom::find($id));
	}
}
?>
