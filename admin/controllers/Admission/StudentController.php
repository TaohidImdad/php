<?php
class StudentController{
    function __construct(){
       
    }
   //----Mange-----
     function index(){       
       view("admission");
     }
   //-----Save---- 
     function create(){
        view("admission");        
     }
 
     function save($data,$file){       
        if(isset($data["create"])){
            $errors=[];
        
            if(count($errors)==0){
                $student=new Student();                
                $student->name=$data["name"];
                $student->fathers_name=$data["fathers_name"];
                $student->mothers_name=$data["mothers_name"];
                $student->contact_no=$data["contact_no"];
                $student->photo=File::upload($file["photo"],"img",$data["name"]);
                $student->address=$data["address"];
                $student->dob=date("Y-m-d",strtotime($data["dob"]));
                //$cattle->gender=0;
                //$cattle->created_at=$now;
                //$cattle->updated_at=$now;
                $student->save();
                redirect("index");
            }else{
                 print_r($errors);
            }
        }

     }


 //------Edit-----
     function edit($id){       
        view("admission",Student::find($id));
     }
 
     function update($data,$file){
        
        $student=new Student();
		$student->id=$data["id"];
		$student->name=$data["name"];
		$student->fathers_name=$data["fathers_name"];
		$student->mothers_name=$data["mothers_name"];
		$student->address=$data["address"];
		$student->dob=$data["dob"];
		
        if($file["photo"]["name"]!=""){
			$student->photo=File::upload($file["photo"], "img",$data["id"]);
		}else{
			$student->photo=Student::find($data["id"])->photo;
		}

		$student->update();

        redirect("index");
     }


 //------Delete-----
     function confirm($id){
        echo "Are you sure to delete? ".$id;
       //Cattle::delete($id);        
      // redirect("index");
     }

     function delete($id){
        if(isset($id)){
            Student::delete($id);
            redirect("index");
        }
     }
  //------Show-----------
     function show($id){
        view("admission");
     }

  //-------Search--------



 }

