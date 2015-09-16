<?php 

session_start();

function loggedin(){
	if(isset($_SESSION['employ_id']) && !empty($_SESSION['employ_id'])){
		return true;
	}
	else{
		return false;
	}


}

if (loggedin()){
	#query username
	$my_id = $_SESSION['employ_id'];
	
	$user_query = mysql_query("SELECT username, user_level, email, staff_name, employee_id FROM users WHERE employee_id= '$my_id'");
	$run_user = mysql_fetch_array($user_query);
	$username = $run_user['username'];
	$user_level = $run_user['user_level'];
	$employee_id = $run_user['employee_id'];
	$staff_name = $run_user['staff_name'];
	$email = $run_user['email'];

	#query level
	$query_level = mysql_query("SELECT name FROM user_level WHERE id = '$user_level'");
	$query_user = mysql_fetch_array($query_level);
	$level_name = $query_user['name'];

	#to apply for leave
	$submit_user = mysql_query("SELECT username, type, user_level FROM users WHERE employee_id = '$my_id'");
	$select_user = mysql_query("SELECT name FROM user_level WHERE id = '$user_level'");

	$query_submit = mysql_fetch_array($submit_user);
	$query_select = mysql_fetch_array($select_user);

	$submit_username = $query_submit['username'];
	$submit_type = $query_submit['type'];
	$submit_user_level = $query_submit['user_level'];
	$select_name = $query_select['name'];

	#to register new staff


	#view pending leave for one user
	/*
	$check = mysql_query("SELECT id, username FROM apply_for_leave ");
            if (mysql_num_rows($check) ==1) {
            	# code...
            	$ru = mysql_fetch_array($check);
            	$my = $ru ['id'];
            	echo $my;
            	
            }else {
            	echo "nothing";
            }
            */



}


	





?>