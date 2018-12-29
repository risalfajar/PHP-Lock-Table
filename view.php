<?php
include "connect_by_session.php";
$query = "SELECT * FROM person";
$sql = mysqli_query ($conn, $query);
?>

<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>View Data</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" media="screen" href="main.css" />
		<script src="main.js"></script>
	</head>

	<body>
		<table align="center" border="1" width="80%">
			<thead>
				<tr>
					<td>ID</td>
					<td>Name</td>
					<td>Age</td>
					<td>Action</td>
				</tr>
			</thead>
			<tbody>
				<?php
				while ($hasil = mysqli_fetch_array ($sql)) {
					$id = $hasil['id'];
					$name = $hasil['name'];
					$age = $hasil['age'];
					echo "<tr>";
					echo "<td width=10%>$id</td>";
					echo "<td width=30%>$name</td>";
					echo "<td width=30%>$age</td>";
					echo "<td width=30%>
							<a href='edit.php?id=$id'>Edit</a>
							<a href='delete.php?id=$id'>Hapus</a>
						</td>";
					echo"</tr>";
				}
				?>
			</tbody>
		</table>
		<p align="center">
			<a href="add.php">Add Data</a>
		</p>
	</body>
</html>