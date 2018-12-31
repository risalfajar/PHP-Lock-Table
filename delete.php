<?php
include "connect_by_session.php";

$id = $_GET['id'];

#region CEK USER
$query = "SELECT * FROM active_user WHERE record_id='". $id ."';";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_array($result, MYSQLI_ASSOC);

if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}

if(isset($data['name'])){
	if($data['name'] != $_SESSION['username']){
		echo '<script language="javascript">';
		echo 'alert("Record sedang dipakai");
				window.location.href="view.php";';
		echo '</script>';
		die();
	}
}
#endregion

$query = "DELETE FROM person WHERE ID='$id'";
$delete = mysqli_query($conn, $query);

if(!$delete){
	echo '<script language="javascript">';
		echo 'alert('. mysqli_error($conn) .');
				window.location.href="view.php";';
		echo '</script>';
}else{
	header('location:view.php');
}
?>