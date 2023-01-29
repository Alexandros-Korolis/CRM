<?php require("header.php");?>

<h1>Add Contact</h1>
	
	<form action="resultContact.php" method="GET">
		<input type=hidden name="customer_id" value="<?php echo $_GET["customer_id"]?>">
		<label>Subject</label><br><br>
		<input type="text" name="subject"><br><br>
		
		<label>Contact Type</label><br><br>
		<select name="type_c" id="type_c">
		  <option >Email</option>
		  <option >Phone</option>
		  <option >Appointment</option>
		  
		</select><br><br>
		
		<button>Submit</button>
		
	</form>
<?php require("footer.php");?>