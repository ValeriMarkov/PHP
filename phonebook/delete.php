<?php
require 'conn.php';
$getId = $_GET['deleteId'];
$query = "DELETE FROM contactDetails WHERE contactId = '$getId'";
$queryLaunch = mysqli_query($DBconn,$query);
if($queryLaunch){
	header('Location:index.php');
}else{
	echo 'There was a error, while deleting contact!';
}
?>