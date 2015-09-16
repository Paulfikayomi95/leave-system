<?php

include 'include/connect.php' ;
include 'include/functions.php';

$u_id = $_GET['u_id'];
$status = $_GET['status'];




if ($status == '2') {
	# code...
	mysql_query("UPDATE `apply_for_leave` SET status= '3' WHERE `apply_for_leave`.`id`= '$u_id'");
	
	header('location: approve.php?type=user');
}elseif ($status == '3') {
	# code...
	mysql_query("UPDATE `apply_for_leave` SET status= '2' WHERE `apply_for_leave`.`id`= '$u_id'");
	header('location: approve.php?type=user');
}

?>