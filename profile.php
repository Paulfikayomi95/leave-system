<!DOCTYPE html>
<html>
<head>
	<title>Admin_Panel</title>
</head>
<body>
<?php 
include 'include/connect.php' ;
include 'include/functions.php';
include 'include/title_bar.php';

?>
<div style="position: absolute; right:600px ">
<h3><font face="cambria" color="blue">Profile - Admin Panel System</font> </h3>

<p><font face ="cambria">You are logged in as <br/> <b><?php echo "Username: $username <br />" ; ?> <?php echo " Level: $level_name <br />"; echo "Employee_Id: $employee_id"; ?></p>

<?php 
if($user_level == 1){
	echo '<a href="admin.php">Admin Panel</a>';

}
?>
</b>
</font>
<div>
</body>
</html>