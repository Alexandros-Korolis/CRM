<?php require("header.php");?>
<?php require("functions.php");?>
<?php

	$subject=$_GET["subject"];
	$type_c=$_GET["type_c"];
	$customer_id=$_GET["customer_id"];
	
	if($type_c==="Email"){
		$type_c=1;
	}
	
	if($type_c==="Phone"){
		$type_c=2;
	}
	
	if($type_c==="Appointment"){
		$type_c=3;
	}
	
	$sql = "INSERT INTO contact (topic, customer_Id, contact_type_Id)
VALUES ('$subject', '$customer_id', '$type_c')";
	
	insertTodb($sql);
?>

<?php require("footer.php");?>