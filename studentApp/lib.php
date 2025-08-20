<?php
require_once("db_config.php");

function input($config){    
    $label=isset($config["label"])?"<label>{$config["label"]}</lable><br>":""; 
    $value=isset($config["value"])?"value='{$config["value"]}'":""; 
    $error=isset($config["error"])?"<span>{$config["error"]}</span>":"";     
    $html="<div>";
    $html.=$label;
    $html.="<input type='{$config["type"]}' name='{$config["name"]}' $value />$error";     
    $html.="</div>";
    return $html;  
}


function print_dropdown($config,$data){    
    $selected=isset($config["selected"])?$config["selected"]:"";
    $style=isset($config["style"])?$config["style"]:"";
    $class=isset($config["class"])?$config["class"]:"";

    $name=$config["name"];
    $html="<select name='$name' style='$style' class='$class'>"; 
    $html.=isset($config["choose"])?"<option>{$config["choose"]}</option>":"";
    foreach($data as $v){
        if($v["id"]==$selected){
           $html.="<option value='{$v["id"]}' selected='selected'>{$v["name"]}</option>";
        }else{
           $html.="<option value='{$v["id"]}'>{$v["name"]}</option>";
        }    
    }
    $html.="</select>";    
    return $html;

}

function print_table($data,$th=[],$config=[]){    
    $class=isset($config["class"])?$config["class"]:"";
    $style=isset($config["style"])?$config["style"]:"";

    $html="<table class='{$class}' style='{$style}'>";    
    if(count($th)>0){
        $html.="<tr>";  
        foreach($th as $h){
            $html.="<th>$h</th>";
        }
        $html.="</tr>";
    }
    foreach($data as $v){
      $html.="<tr>";
         foreach($v as $d){             
            $html.="<td>$d</td>";
         }
      $html.="</tr>"; 
    } 
    $html.="</table>";
    return $html;
 }


function dropdown_db($config){    
    global $db;
    $selected=isset($config["selected"])?$config["selected"]:"";
    $label=isset($config["label"])?"<label>{$config["label"]}<br></label>":"";
    $style=isset($config["style"])?$config["style"]:"";
    $class=isset($config["class"])?$config["class"]:"";
   
    $value=$config["value"];
    $display=$config["display"];
    $table=$config["table"];

    $name=$config["name"];
    $html="<div>";
    $html.=$label;
    $html.="<select name='$name' style='$style' class='$class'>"; 
    $html.=isset($config["choose"])?"<option>{$config["choose"]}</option>":"";
    $result=$db->query("select $value,$display from $table");
    while($v=$result->fetch_object()){
        if($v->$value==$selected){
           $html.="<option value='{$v->$value}' selected='selected'>{$v->$display}</option>";
        }else{
           $html.="<option value='{$v->$value}'>{$v->$display}</option>";
        }    
    }
    $html.="</select>";    
    $html.="</div>";  
    return $html;
}

 
 function print_table_db($result,$config=[]){    
    $class=isset($config["class"])?$config["class"]:"";
    $style=isset($config["style"])?$config["style"]:"";

    $html="<table class='{$class}' style='{$style}'>";    
   
    $fields= $result->fetch_fields();

    $html.="<tr>";  
    foreach($fields as $field){
        $h=ucfirst($field->name);
        $html.="<th>$h</th>";
    }
    $html.="</tr>";
    
    while($data=$result->fetch_row()){
        $html.="<tr>";
        foreach($data as $v){
            $html.="<td>$v</td>";
        }
        $html.="</tr>";
    }
    $html.="</table>";
    return $html;
 }

 function form_open($action){
    return "<form action='$action' method='post' enctype='form-data/multipart'>";
 }

 function action_button($config){
   $html="<form action='{$config["action"]}' method='post' style='float:left;'>";
   $html.="<input type='hidden' value='{$config["id"]}' name='txtId' />";    
   $html.="<input type='submit' value='{$config["value"]}' name='{$config["name"]}' />";
   $html.="</form>";
   return $html;
 }



?>
