<?php

include 'include/connect.php' ;
include 'include/functions.php';

$u_id = $_GET['u_id'];
$type = $_GET['type'];


if ($type == 'a') {
	# code...
	mysql_query("UPDATE `users` SET type= 'd' WHERE `users`.`id`= '$u_id'");
	
	header('location: user.php?type=user');
}elseif ($type == 'd') {
	# code...
	mysql_query("UPDATE `users` SET type= 'a' WHERE `users`.`id`= '$u_id'");
	header('location: user.php?type=user');
}

?>