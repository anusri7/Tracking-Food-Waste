
		<?php

		$servername = "localhost";
		$username = "system";
		$password ="Anusri";
		$database_name = "foodwaste";
		$conn = mysqli_connect($servername, $username,$password, $database_name);
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
	
		$Dishes = $_REQUEST['Dishes'];
		$Prepared = $_REQUEST['Prepared'];
		$Consumed = $_REQUEST['Consumed'];
		
		// Performing insert query execution
		// here our table name is complaints
		$sql = "INSERT INTO hotel VALUES (
			'$Dishes','$Prepared','$Consumed')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n $Dishes\n "
				. "$Prepared\n $Consumed\n ");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>