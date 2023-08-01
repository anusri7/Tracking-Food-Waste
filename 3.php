<!DOCTYPE html>
<html lang="en">
<head>
	<title>GFG- Store Data</title>
</head>
<body>
	<center>
		<h1>Storing Form data in Database</h1>
		<form action="4.php" method="post">
			
<label for="Dishes">Select the Dish:</label>
<select name="Dishes" id="Dishes">
<option value="select">Select</option>
        <option value="idly">Idly</option>
        <option value="dosa">Dosa</option>
        <option value="poori">Poori</option>
        <option value="chapathi">Chapathi</option>
        <option value="tomato rice">Tomato rice</option>
        <option value="Curd rice">Curd rice</option>
        <option value="Lemon rice">Lemon rice</option>
        <option value="Sambar rice">Sambar rice</option>
        <option value="Veg Briyani">Veg Briyani</option>
        <option value="Fried rice">Fried rice</option>
        <option value="Naan">Naan</option>
        <option value="Mushroom Briyani">Mushroom Briyani</option>
       
      </select>
			</p>
			
<p>
			<label for="Prepared">No of Dishes Produced:</label>
			<input type="text" name="Prepared" id="Prepared">
			</p>

			
<p>
			<label for="Consumed">No of Dishes Consumed:</label>
			<input type="text" name="Consumed:" id="Consumed">
			</p>
			<input type="submit" value="Submit">
</form> 
	</center>
</body>
</html>