<?php
include "connect_by_session.php";
$name = $_POST['name'];
$age = $_POST['age'];

$query = "INSERT INTO person(name, age) VALUES('$name', '$age');";

if(!$conn){
	echo '<script language="javascript">';
	echo 'alert("Koneksi Eror")';
	echo '</script>';
}else{
	mysqli_query($conn, $query);
	header("location:add.html");
}
?>