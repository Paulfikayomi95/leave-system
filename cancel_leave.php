<?php
include 'include/connect.php' ;
include 'include/functions.php';

$u_id = $_GET['u_id'];

$status = $_GET['status'];

if ($status == 2) {
	# code...
	mysql_query("DELETE FROM `apply_for_leave` WHERE `apply_for_leave`.`id` = '$u_id' ");
	header('location: tab.php');

}

?>