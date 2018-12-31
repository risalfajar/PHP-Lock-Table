<?php
include "connect_by_session.php";
$id = $_POST['ID'];
$name = $_POST['name'];
$age = $_POST['age'];

$query = "UPDATE person SET name='$name',age='$age' WHERE id='$id'";

if(!$conn){
	echo '<script language="javascript">';
	echo 'alert("Koneksi Eror")';
	echo '</script>';
}else{
	mysqli_query($conn, $query);
	header("location:view.php");
}
?>