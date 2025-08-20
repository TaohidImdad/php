<?php
echo Page::title(["title"=>"Show Cattle"]);
echo Page::body_open();
echo Html::link(["class"=>"btn btn-success", "route"=>"cattle", "text"=>"Manage Cattle"]);
echo Page::context_open();
echo Cattle::html_row_details($id);
echo Page::context_close();
echo Page::body_close();
