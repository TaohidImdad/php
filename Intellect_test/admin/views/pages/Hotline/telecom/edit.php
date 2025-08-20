<?php
echo Page::title(["title"=>"Edit Telecom"]);
echo Page::body_open();
echo Html::link(["class"=>"btn btn-success", "route"=>"telecom", "text"=>"Manage Telecom"]);
echo Page::context_open();
echo Form::open(["route"=>"telecom/update"]);
	echo Form::input(["label"=>"Id","type"=>"hidden","name"=>"id","value"=>"$telecom->id"]);
	echo Form::input(["label"=>"Name","type"=>"text","name"=>"name","value"=>"$telecom->name"]);

echo Form::input(["name"=>"update","class"=>"btn btn-success offset-2" , "value"=>"Save Chanage", "type"=>"submit"]);
echo Form::close();
echo Page::context_close();
echo Page::body_close();
