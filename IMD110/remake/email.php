<?
$email=$_REQUEST['email'] ;
$message =  
$_POST["name"]. "\n".
$_POST["email"]. "\n".
$_POST["phone"]. "\n".
$_POST["address"]. "\n". 
$_POST["address2"]. "\n".
$_POST["address3"]. "\n".
$_POST["male"]. "\n".
$_POST["female"]. "\n".  
$_POST["comments"]. "\n". 
$_POST["questions"]. "\n";
mail( "Dquach22@gmail.com", "Forbidden City Feedback Form",
$message, "From: $email" );
header( "Location: http://dquach.aiwsites.com/IMD110/remake/reply.htm" );

?>



