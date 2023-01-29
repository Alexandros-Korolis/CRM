<?php require_once("header.php");?>
<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "db_php_exercise5.1";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT Id, first_name, last_name, phone_nr, email  FROM customer";
	$result = $conn->query($sql);
?>
	<table class="table table-bordered">
	  <thead>
		<tr>
		  <th scope="col">#</th>
		  <th scope="col">First Name</th>
		  <th scope="col">Last Name</th>
		  <th scope="col">Phone Number</th>
		  <th scope="col">Email</th>
		  <th scope="col">Contact History</th>
		  <th scope="col">Add Contact</th>
		</tr>
	  </thead>
	  <tbody>
	
<?php
	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) {?>
		<tr>
			<th scope="row"><?php echo $row["Id"];?></th>
			<td><?php echo $row["first_name"];?></td>
			<td><?php echo $row["last_name"];?></td>
			<td><?php echo $row["phone_nr"];?></td>
			<td><?php echo $row["email"];?></td>
			<td><a href="history.php?customer_id=<?php echo $row["Id"];?>">Contact History</a></td>
			<td><a href="addContact.php?customer_id=<?php echo $row["Id"];?>">Add contact</a></td>
		</tr>
<?php	  }
	} else {
	  echo "0 results";
	}?>
		</tbody>
	</table>
	
<?php	
	$conn->close();
	
?>
<?php require_once("footer.php");?>