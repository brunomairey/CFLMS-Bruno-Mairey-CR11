<?php
	$connect = mysqli_connect("localhost","root","","cr11_bruno_petadoption");

	$search2 = $_POST["search"];
	

		$sql2 = "SELECT address FROM pets WHERE address LIKE '%$search2%'";
	$result = mysqli_query($connect, $sql2);

	if($result->num_rows == 0){
		echo "";
	}elseif($result->num_rows == 1){
		$row = $result->fetch_assoc();
		echo "Address: " . $row["address"]. "<br>";
	}else {
		$rows = $result->fetch_all(MYSQLI_ASSOC);
		foreach ($rows as $row) {
			echo "Address: " . $row["address"]."<br>";
		}
	}


		$sql2 = "SELECT zip_code FROM pets WHERE zip_code LIKE '%$search2%'";
	$result = mysqli_query($connect, $sql2);

	if($result->num_rows == 0){
		echo "";
	}elseif($result->num_rows == 1){
		$row = $result->fetch_assoc();
		echo "Zipcode: " . $row["zip_code"]. "<br>";
	}else {
		$rows = $result->fetch_all(MYSQLI_ASSOC);
		foreach ($rows as $row) {
			echo "Zipcode: " . $row["zip_code"]."<br>";
		}
	}


		$sql2 = "SELECT city FROM pets WHERE city LIKE '%$search2%'";
	$result = mysqli_query($connect, $sql2);

	if($result->num_rows == 0){
		echo "";
	}elseif($result->num_rows == 1){
		$row = $result->fetch_assoc();
		echo "City: " . $row["city"]. "<br>";
	}else {
		$rows = $result->fetch_all(MYSQLI_ASSOC);
		foreach ($rows as $row) {
			echo "City: " . $row["city"]."<br>";
		}
	}


		$sql2 = "SELECT age FROM pets WHERE age LIKE '%$search2%'";
	$result = mysqli_query($connect, $sql2);

	if($result->num_rows == 0){
		echo "";
	}elseif($result->num_rows == 1){
		$row = $result->fetch_assoc();
		echo "Age: " . $row["age"]. "<br>";
	}else {
		$rows = $result->fetch_all(MYSQLI_ASSOC);
		foreach ($rows as $row) {
			echo "Age: " . $row["age"]."<br>";
		}
	}


		$sql2 = "SELECT type FROM pets WHERE type LIKE '%$search2%'";
	$result = mysqli_query($connect, $sql2);

	if($result->num_rows == 0){
		echo "";
	}elseif($result->num_rows == 1){
		$row = $result->fetch_assoc();
		echo "Type: " . $row["type"]. "<br>";
	}else {
		$rows = $result->fetch_all(MYSQLI_ASSOC);
		foreach ($rows as $row) {
			echo "Type: " . $row["type"]."<br>";
		}
	}



		$sql2 = "SELECT name FROM pets WHERE name LIKE '%$search2%'";
	$result = mysqli_query($connect, $sql2);

	if($result->num_rows == 0){
		echo "";
	}elseif($result->num_rows == 1){
		$row = $result->fetch_assoc();
		echo "Name: " . $row["name"]. "<br>";
	}else {
		$rows = $result->fetch_all(MYSQLI_ASSOC);
		foreach ($rows as $row) {
			echo "Name: " . $row["name"]."<br>";
		}
	}


		$sql2 = "SELECT description FROM pets WHERE description LIKE '%$search2%'";
	$result = mysqli_query($connect, $sql2);

	if($result->num_rows == 0){
		echo "";
	}elseif($result->num_rows == 1){
		$row = $result->fetch_assoc();
		echo "Description: " . $row["description"]. "<br>";
	}else {
		$rows = $result->fetch_all(MYSQLI_ASSOC);
		foreach ($rows as $row) {
			echo "Description: " . $row["description"]."<br>";
		}
	}

		$sql2 = "SELECT hobbies FROM pets WHERE hobbies LIKE '%$search2%'";
	$result = mysqli_query($connect, $sql2);

	if($result->num_rows == 0){
		echo "";
	}elseif($result->num_rows == 1){
		$row = $result->fetch_assoc();
		echo "Hobbies: " . $row["hobbies"]. "<br>";
	}else {
		$rows = $result->fetch_all(MYSQLI_ASSOC);
		foreach ($rows as $row) {
			echo "Hobbies: " . $row["hobbies"]."<br>";
		}
	}


?>
