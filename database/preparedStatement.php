<?php 

$db=new mysqli("localhost","root","","test");


   $save=$db->prepare("select * form student where class=? and section=?");
   $class=1;
   $section="A";
   $save->bind_param('ss',$class,$section);
   $save->execute();
   $save->get_result()->fetch_object();
   $save->close();


   $save=$db->prepare("select * form student where name like? and section?");
   $save=$db->prepare("select * form student where name like? and section in (?,?)");

   $name="%br%";





   
?>

