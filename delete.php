<?php
include "connect_by_session.php";

$id = $_GET['id'];
$query = "DELETE FROM person WHERE ID='$id'";
$delete = mysqli_query($conn, $query);

if(!$delete){
	die("delete gagal");
}else{
	header('location:view.php');
}
?>