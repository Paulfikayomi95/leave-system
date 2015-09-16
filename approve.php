<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/tab.css" />
	<link rel="stylesheet" type="text/css" href="css/table.css" />
    <script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="js/tab.js" ></script>
</head>
<body>

</body>
</html>
<?php 

include 'include/connect.php' ;
include 'include/functions.php';
include 'include/title_bar.php';
/*
if (isset($_GET['type']) && !empty($_GET['type']) ) {
	# code...
	$approve_user = mysql_query("SELECT first_name, last_name, type_of_leave,submit_username, status FROM apply_for_leave WHERE status = '2' ");

	while($query_approve = mysql_fetch_array($approve_user)){
		$run_fname = $query_approve['first_name'];
		$run_tyo = $query_approve['type_of_leave'];echo "$run_fname";
	}

	

}else{
	echo "nothi";
}

	
*/
?>
<h3> Admin Panel System </h3>

<?php
if ($user_level != 1){
	header('location: profile.php');
}
 ?>
 <div class="tabs">
    <ul class="tab-links">
        <li><a href="user.php?type=user">User Setting</a></li>
        <li><a href="level.php?type=user">Level</a></li>
        <li><a href="approve.php?type=user">Approve</a></li>
        <li><a href="register.php?type=user">Register</a></li>
    </ul>

 <?php 

if(isset($_GET['type']) && !empty($_GET['type']) ){

?>
<div class="tab-content">
<table> 
<tr><th>Users</th>
<th>Status</th>
<th>From</th>
<th>To</th>
<th>Approve/Cancel</th>
<th>Reject</th>

</tr>
<?php 

$list_query = mysql_query("SELECT `id`, `staff_name`, `submit_type`, `status`,`from`, `to` FROM apply_for_leave");
while($run_list = mysql_fetch_array($list_query)){
	$u_id = $run_list['id'];
	$u_username = $run_list['staff_name'];
	$u_type = $run_list['submit_type'];
	$u_status = $run_list['status'];
	$from = $run_list['from'];
	$to = $run_list['to'];
?>

<tr
><td><?php echo "$u_username"; ?> </td>
<td>
	
	<?php

	if($u_status == '2'){
		echo 'Pending';


	}elseif ($u_status == '3') {
		# code...
		echo 'Approved';
	} elseif ($u_status == '4') {
		# code...
		echo "Rejected";
	}

	?>
</td>
<td>
	<?php echo "$from"; ?>
</td>
<td>
	<?php echo "$to"; ?>
</td>
<td><?php

if($u_status == '2'){
	echo "<button><a href='approval.php?u_id=$u_id&status=$u_status'>Approve</a></button>";
}elseif ($u_status == '3') {
	# code...
	echo "<button><a href='approval.php?u_id=$u_id&status=$u_status'>Cancel</a></button>";
}

?>
</td>
<td>
	<?php 

	if ($u_status == '2') {
		# code...
		echo "<button><a href='reject.php?u_id=$u_id&status=$u_status'>Reject</a></button>";
	}

	?>
</td>
</tr>

<?php
}

?>
</div>
</div>
</table>
<?php
} 

 ?>