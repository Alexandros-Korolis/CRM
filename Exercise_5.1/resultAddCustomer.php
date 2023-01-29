<?php
require_once("functions.php");

if($_SERVER["REQUEST_METHOD"]==="POST"){
	
	$firstname=$_POST["f_name"];
	$lastName=$_POST["l_name"];
	$phone_nr=$_POST["phone_nr"];
	$email=$_POST["Email"];
	$comment=$_POST["comment"];
	
	$sql = "INSERT INTO customer (first_name,last_name,phone_nr,email,comment)
		VALUES ('$firstname', '$lastName', '$phone_nr','$email','$comment')";
		
	
	insertTodb($sql);
	 
}
	




?>