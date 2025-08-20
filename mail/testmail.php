<?php 

$form ="test@gmial.com";
$to ="tawhidimdad@gmial.com";
$subject="testmail";
$body ="HI \n  im am test mail";
$header ="from:{$form}\r\n";
$header ="MIME:{$form}\r\n";
$header ="from:{$form}\r\n";


echo mail($to, $subject,$body, $header);


?>