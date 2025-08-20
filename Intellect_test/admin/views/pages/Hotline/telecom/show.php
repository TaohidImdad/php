<?php
echo Page::title(["title"=>"Show Telecom"]);
echo Page::body_open();
echo Html::link(["class"=>"btn btn-success", "route"=>"telecom", "text"=>"Manage Telecom"]);
echo Page::context_open();
echo Telecom::html_row_details($id);
echo Page::context_close();
echo Page::body_close();
