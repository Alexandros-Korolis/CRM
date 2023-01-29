<?php require("header.php");?>

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
	
	$custID=$_GET["customer_id"];
	
	$sql = "SELECT customer.Id ,customer.first_name,customer.last_name,contact.topic,contact_type.type,contact.time
			FROM customer
			INNER JOIN contact
			ON customer.id=contact.customer_Id
			INNER JOIN contact_type
			ON contact_type.id=contact.contact_type_Id
			WHERE customer.Id=$custID";
			
	$result = $conn->query($sql);
?>
	<table class="table table-bordered">
	  <thead>
		<tr>
		  <th scope="col">#</th>
		  <th scope="col">First Name</th>
		  <th scope="col">Last Name</th>
		  <th scope="col">Topic</th>
		  <th scope="col">Type</th>
		  <th scope="col">Time</th>
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
			<td><?php echo $row["topic"];?></td>
			<td><?php echo $row["type"];?></td>
			<td><?php echo $row["time"];?></td>
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



<?php require("footer.php");?>