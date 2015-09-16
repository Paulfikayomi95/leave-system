<?php 

include 'include/connect.php' ;
include 'include/functions.php';

$u_id = $_GET['u_id'];
$status = $_GET['status'];




if ($status == '2') {
	# code...
	mysql_query("UPDATE `apply_for_leave` SET status= '4' WHERE `apply_for_leave`.`id`= '$u_id'");
	
	header('location: approve.php?type=user');
}

?>