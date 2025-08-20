<?php
class CattleController extends Controller{
	public function __construct(){
	}
	
	public function index(){
		view("Agro");
	}

	public function create(){
		view("Agro");
	}
public function save($data,$file){
	if(isset($data["create"])){
	$errors=[];
/*
	if(!preg_match("/^[\s\S]+$/",$_POST["txtName"])){
		$errors["name"]="Invalid name";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtRegion"])){
		$errors["region"]="Invalid region";
	}
	if(!preg_match("/^[\s\S]+$/",$data["dob"])){
		$errors["dob"]="Invalid dob";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtColor"])){
		$errors["color"]="Invalid color";
	}
	if(!preg_match("/^[\s\S]+$/",$data["description"])){
		$errors["description"]="Invalid description";
	}
	if(!preg_match("/^[\s\S]+$/",$data["photo"])){
		$errors["photo"]="Invalid photo";
	}
	if(!preg_match("/^[\s\S]+$/",$data["gender"])){
		$errors["gender"]="Invalid gender";
	}
	if(!preg_match("/^[\s\S]+$/",$data["cattle_category_id"])){
		$errors["cattle_category_id"]="Invalid cattle_category_id";
	}

*/
		if(count($errors)==0){
			$cattle=new Cattle();
		$cattle->name=$data["name"];
		$cattle->region=$data["region"];
		$cattle->dob=$data["dob"];
		$cattle->color=$data["color"];
		$cattle->description=$data["description"];
		$cattle->photo=File::upload($file["photo"], "img",$data["id"]);
		$cattle->gender=isset($data["gender"])?1:0;
		$cattle->cattle_category_id=$data["cattle_category_id"];

			$cattle->save();
		redirect();
		}else{
			 print_r($errors);
		}
	}
}
public function edit($id){
		view("Agro",Cattle::find($id));
}
public function update($data,$file){
	if(isset($data["update"])){
	$errors=[];
/*
	if(!preg_match("/^[\s\S]+$/",$_POST["txtName"])){
		$errors["name"]="Invalid name";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtRegion"])){
		$errors["region"]="Invalid region";
	}
	if(!preg_match("/^[\s\S]+$/",$data["dob"])){
		$errors["dob"]="Invalid dob";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtColor"])){
		$errors["color"]="Invalid color";
	}
	if(!preg_match("/^[\s\S]+$/",$data["description"])){
		$errors["description"]="Invalid description";
	}
	if(!preg_match("/^[\s\S]+$/",$data["photo"])){
		$errors["photo"]="Invalid photo";
	}
	if(!preg_match("/^[\s\S]+$/",$data["gender"])){
		$errors["gender"]="Invalid gender";
	}
	if(!preg_match("/^[\s\S]+$/",$data["cattle_category_id"])){
		$errors["cattle_category_id"]="Invalid cattle_category_id";
	}

*/
		if(count($errors)==0){
			$cattle=new Cattle();
			$cattle->id=$data["id"];
		$cattle->name=$data["name"];
		$cattle->region=$data["region"];
		$cattle->dob=$data["dob"];
		$cattle->color=$data["color"];
		$cattle->description=$data["description"];
		if($file["photo"]["name"]!=""){
			$cattle->photo=File::upload($file["photo"], "img",$data["id"]);
		}else{
			$cattle->photo=Cattle::find($data["id"])->photo;
		}
		$cattle->gender=isset($data["gender"])?1:0;
		$cattle->cattle_category_id=$data["cattle_category_id"];

		$cattle->update();
		redirect();
		}else{
			 print_r($errors);
		}
	}
}
	public function confirm($id){
		view("Agro");
	}
	public function delete($id){
		Cattle::delete($id);
		redirect();
	}
	public function show($id){
		view("Agro",Cattle::find($id));
	}
}
?>
