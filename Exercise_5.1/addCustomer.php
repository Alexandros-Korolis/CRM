<?php require_once("header.php");?>

		<h1>Add new Customer </h1>
		
		<form action="resultAddCustomer.php" method="POST">
			<label for="First Name">First Name</label><br>
			<input type="text" id="f_name" name="f_name"><br><br>
			
			<label for="Last Name">Last Name</label><br>
			<input type="text" id="l_name" name="l_name"><br><br>
			
			<label for="phone_nr">Phone Number</label><br>
			<input type="number" id="phone_nr" name="phone_nr"><br><br>
			
			<label for="Email">Email</label><br>
			<input type="Email" id="Email" name="Email"><br><br>
			
			<label for="comment">Comment</label><br>
			<textarea id="comment" name="comment" rows="4" cols="50"></textarea><br><br>
			
			<input type="Submit" value="Submit">
		
		</form>
<?php require_once("footer.php");?>