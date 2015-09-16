<?php 

include 'include/connect.php' ;
include 'include/functions.php';
include 'include/title_bar.php';

if (isset($_POST['update'])) {
	# code...
	$staff_name = $_POST['staff_name'];
	$username =$_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];

	if (!empty($staff_name) or !empty($username) or !empty($password) or !empty($email)) {
		# code...
		mysql_query("UPDATE `users` SET `staff_name` = '$staff_name', `username` = '$username', `password` = '$password', `email` = '$email' WHERE `users`.`employee_id` = '$employee_id'");
		echo "Record Updated";
	}else{
		echo "Update Failed";
	}


}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Update/Change Profile</title>
	<link rel="stylesheet" type="text/css" href="css/profile.css">
</head>
<body>
<form method="POST" action="" class="basic-grey">
<h1>Update/Change Profile
<span>Please Fill in the necessary required fields.</span>
</h1>

<label>
	<span>Staff Name :</span>
	<input type="text" name="staff_name" value='<?php echo "$staff_name"; ?>' />
</label>
<label>
	<span>Username :</span>
	<input type="text" name="username" value='<?php echo "$username"; ?>' />
</label>
<label>
	<span>New Password :</span>
	<input type="password" name="password" required= "true" />
</label>
<label>
	<span>New Email Account</span>
	<input type="email" name="email" value='<?php echo "$email"; ?>' />
</label>
<label>
	<span>Employee_id</span>
	<input type="text" name="employee_id" value='<?php echo "$employee_id"; ?>' disabled="true" />
</label>

<label>
        <span>&nbsp;</span> 
        <input type="submit" class="button" value="Update" name="update" /> 
    </label>

</form>
</body>
</html>