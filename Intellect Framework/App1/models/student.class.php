<?php
class Student implements JsonSerializable{
	public $id;
	public $name;
	public $fathers_name;
	public $mothers_name;
	public $dob;
	public $contact_no;
	public $address;
	public $photo;

	public function __construct(){
	}
	public function set($id,$name,$fathers_name,$mothers_name,$dob,$contact_no,$address,$photo){
		$this->id=$id;
		$this->name=$name;
		$this->fathers_name=$fathers_name;
		$this->mothers_name=$mothers_name;
		$this->dob=$dob;
		$this->contact_no=$contact_no;
		$this->address=$address;
		$this->photo=$photo;

	}
	public function save(){
		global $db,$tx;
		$db->query("insert into {$tx}students(name,fathers_name,mothers_name,dob,contact_no,address,photo)values('$this->name','$this->fathers_name','$this->mothers_name','$this->dob','$this->contact_no','$this->address','$this->photo')");
		return $db->insert_id;
	}
	public function update(){
		global $db,$tx;
		$db->query("update {$tx}students set name='$this->name',fathers_name='$this->fathers_name',mothers_name='$this->mothers_name',dob='$this->dob',contact_no='$this->contact_no',address='$this->address',photo='$this->photo' where id='$this->id'");
	}
	public static function delete($id){
		global $db,$tx;
		$db->query("delete from {$tx}students where id={$id}");
	}
	public function jsonSerialize(){
		return get_object_vars($this);
	}
	public static function all(){
		global $db,$tx;
		$result=$db->query("select id,name,fathers_name,mothers_name,dob,contact_no,address,photo from {$tx}students");
		$data=[];
		while($student=$result->fetch_object()){
			$data[]=$student;
		}
			return $data;
	}
	public static function pagination($page=1,$perpage=10,$criteria=""){
		global $db,$tx;
		$top=($page-1)*$perpage;
		$result=$db->query("select id,name,fathers_name,mothers_name,dob,contact_no,address,photo from {$tx}students $criteria limit $top,$perpage");
		$data=[];
		while($student=$result->fetch_object()){
			$data[]=$student;
		}
			return $data;
	}
	public static function count($criteria=""){
		global $db,$tx;
		$result =$db->query("select count(*) from {$tx}students $criteria");
		list($count)=$result->fetch_row();
			return $count;
	}
	public static function find($id){
		global $db,$tx;
		$result =$db->query("select id,name,fathers_name,mothers_name,dob,contact_no,address,photo from {$tx}students where id='$id'");
		$student=$result->fetch_object();
			return $student;
	}
	static function get_last_id(){
		global $db,$tx;
		$result =$db->query("select max(id) last_id from {$tx}students");
		$student =$result->fetch_object();
		return $student->last_id;
	}
	public function json(){
		return json_encode($this);
	}
	public function __toString(){
		return "		Id:$this->id<br> 
		Name:$this->name<br> 
		Fathers Name:$this->fathers_name<br> 
		Mothers Name:$this->mothers_name<br> 
		Dob:$this->dob<br> 
		Contact No:$this->contact_no<br> 
		Address:$this->address<br> 
		Photo:$this->photo<br> 
";
	}

	//-------------HTML----------//

	static function html_select($name="cmbStudent"){
		global $db,$tx;
		$html="<select id='$name' name='$name'> ";
		$result =$db->query("select id,name from {$tx}students");
		while($student=$result->fetch_object()){
			$html.="<option value ='$student->id'>$student->name</option>";
		}
		$html.="</select>";
		return $html;
	}
	static function html_table($page = 1,$perpage = 10,$criteria="",$action=true){
		global $db,$tx;
		$count_result =$db->query("select count(*) total from {$tx}students $criteria ");
		list($total_rows)=$count_result->fetch_row();
		$total_pages = ceil($total_rows /$perpage);
		$top = ($page - 1)*$perpage;
		$result=$db->query("select id,name,fathers_name,mothers_name,dob,contact_no,address,photo from {$tx}students $criteria limit $top,$perpage");
		$html="<table class='table'>";
			$html.="<tr><th colspan='3'><a class=\"btn btn-success\" href=\"create-student\">New Student</a></th></tr>";
		if($action){
			$html.="<tr><th>Id</th><th>Name</th><th>Fathers Name</th><th>Mothers Name</th><th>Dob</th><th>Contact No</th><th>Address</th><th>Photo</th><th>Action</th></tr>";
		}else{
			$html.="<tr><th>Id</th><th>Name</th><th>Fathers Name</th><th>Mothers Name</th><th>Dob</th><th>Contact No</th><th>Address</th><th>Photo</th></tr>";
		}
		while($student=$result->fetch_object()){
			$action_buttons = "";
			if($action){
				$action_buttons = "<td><div class='clearfix' style='display:flex;'>";
				$action_buttons.= action_button(["id"=>$student->id, "name"=>"Details", "value"=>"Details", "class"=>"info", "url"=>"details-student"]);
				$action_buttons.= action_button(["id"=>$student->id, "name"=>"Edit", "value"=>"Edit", "class"=>"primary", "url"=>"edit-student"]);
				$action_buttons.= action_button(["id"=>$student->id, "name"=>"Delete", "value"=>"Delete", "class"=>"danger", "url"=>"students"]);
				$action_buttons.= "</div></td>";
			}
			$html.="<tr><td>$student->id</td><td>$student->name</td><td>$student->fathers_name</td><td>$student->mothers_name</td><td>$student->dob</td><td>$student->contact_no</td><td>$student->address</td><td><img src='img/$student->photo' width='100' /></td> $action_buttons</tr>";
		}
		$html.="</table>";
		$html.= pagination($page,$total_pages);
		return $html;
	}
	static function html_row_details($id){
		global $db,$tx;
		$result =$db->query("select id,name,fathers_name,mothers_name,dob,contact_no,address,photo from {$tx}students where id={$id}");
		$student=$result->fetch_object();
		$html="<table class='table'>";
		$html.="<tr><th colspan=\"2\">Student Details</th></tr>";
		$html.="<tr><th>Id</th><td>$student->id</td></tr>";
		$html.="<tr><th>Name</th><td>$student->name</td></tr>";
		$html.="<tr><th>Fathers Name</th><td>$student->fathers_name</td></tr>";
		$html.="<tr><th>Mothers Name</th><td>$student->mothers_name</td></tr>";
		$html.="<tr><th>Dob</th><td>$student->dob</td></tr>";
		$html.="<tr><th>Contact No</th><td>$student->contact_no</td></tr>";
		$html.="<tr><th>Address</th><td>$student->address</td></tr>";
		$html.="<tr><th>Photo</th><td><img src='img/$student->photo' width='100' /></td></tr>";

		$html.="</table>";
		return $html;
	}
}
?>
