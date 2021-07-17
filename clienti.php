
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="clienti.css">
</head>
<body>
<div class="informations">
		<table>
			<tr>
				<td>Id Client</td>
				<td>Nume</td>
				<td>Email</td>
				<td>Varsta</td>
				<td>Ocupatie</td>
				<td>Curs</td>
				<td>Comentarii</td>
			</tr>
			<?php
			include 'connect_database.php';
			$sql ="SELECT idClient, name, email, age, ocupation, course, comments FROM classes ORDER BY idClient";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				while($row =$result->fetch_assoc())
				{
					echo "<tr><td>".$row["idClient"]." </td><td> ".$row["name"]." </td><td> ".$row["email"]." </td><td> ".$row["age"]." </td><td> ".$row["ocupation"]." </td><td> ".$row["course"]." </td><td>".$row["comments"]."</td></tr>";
				}

			}else{
				echo "0 results";

			}
			$conn->close();
			?>
		</table>
	</div>
</body>
</html>




