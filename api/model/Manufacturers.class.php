<?php 

class Manufacturers{
    public $id;
    public $name;
    public $contact;

    public function __construct($id, $name, $contact){
        $this->id=$id;
        $this->name=$name;
        $this->contact=$contact;
    }


    public static function getAll(){
        global $db;
        $result= $db->query("select * from manufacturers ");
        

        while ($row= $result->fetch_object()) {
           $data= array(
            "id"=> $row->id,
            "name"=> $row->name,
            "contact"=> $row->contact,
           );


           $data2[]=$data;
        }


        return $data2;
    }
    public static function get($id){
        global $db;
        $result= $db->query("select * from manufacturers ");
        return $result->fetch_object();
    }
    public static function delete($id){

    }
    public  function save(){
      global $db;
      $result = $db->query("insert into manufacturers (name, contact)values('$this->name','$this->contact')");
      return $result;
    }
    public  function update(){

    }
   
}




?>