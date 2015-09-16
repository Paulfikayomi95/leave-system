<!DOCTYPE html>
<html>
<head>
	<title>Admin_Panel</title>
	<link rel="stylesheet" type="text/css" href="css/tab.css" />
	<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="js/tab.js" ></script>
</head>
<body>
<?php 
include 'include/connect.php' ;
include 'include/functions.php';
include 'include/title_bar.php';

?>

<h3> Admin Panel System </h3>

<?php
if ($user_level != 1){
	header('location: profile.php');
}
 ?>
 <p>
 <div class="tabs">
    <ul class="tab-links">
        <li class="active"><a href="user.php?type=user">User Setting</a></li>
        <link rel="stylesheet" type="text/css" href="css/table.css" />
        <li><a href="level.php?type=user">Level</a></li>
        <li><a href="approve.php?type=user">Approve</a></li>
        <li><a href="register.php?type=user">Register</a></li>
    </ul>
 
 </p>

 <?php 

if(isset($_GET['type']) && !empty($_GET['type']) ){

?>
<div class="tab-content">
<table border="">
<tr><th width="">Users</th><th>Options</th></tr>
<?php 

$list_query = mysql_query("SELECT id, username, type FROM users");
while($run_list = mysql_fetch_array($list_query)){
	$u_id = $run_list['id'];
	$u_username = $run_list['username'];
	$u_type = $run_list['type'];
?>

<tr><td><?php echo $u_username; ?> </td><td>
	
	<?php

	if($u_type == 'a'){
		echo "<button><a href='option.php?u_id=$u_id&type=$u_type'>Deactivate</a></button>";


	}elseif ($u_type == 'd'){
		echo "<button><a href='option.php?u_id=$u_id&type=$u_type'>Activate</a></button>";

	}

	?>
</td></tr>

<?php
}

?>
</table>
<?php
} 

 ?>

</body>
</html>