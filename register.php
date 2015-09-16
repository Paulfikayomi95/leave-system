<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Form Style 4</title>
	<link rel="stylesheet" type="text/css" href="css/tab.css" />
    <script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="js/tab.js" ></script>
<?php 
include 'include/connect.php';
include 'include/functions.php';
include 'include/title_bar.php';


if (isset($_POST['submit'])) {
	# code...
	$staff_name = $_POST['staff_name'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	if (!empty($staff_name) or !empty($username) or !empty($email)) {
		# code...

		
	#function to generate password
	function generate_random_id($length = 10) {
    $alphabets = range('A','Z');
    $numbers = range('0','9');
   # $additional_characters = array('_','.');
    $final_array = array_merge($alphabets,$numbers);
         
    $password = '';
  
    while($length--) {
      $key = array_rand($final_array);
      $password .= $final_array[$key];
    }
  
    return $password;
  }

  $password = generate_random_id(8);

  #function to generate employee id
  function generate_employee_id($length = 10) {
    $alphabets = range('A','Z');
    $numbers = range('0','9');
   # $additional_characters = array('_','.');
    $final_array = array_merge($alphabets,$numbers);
         
    $employee = '';
  
    while($length--) {
      $key = array_rand($final_array);
      $employee .= $final_array[$key];
    }
  
    return $employee;
  }

  $employ = generate_employee_id(6);



  #echo 'Employee_id generated is "<b>' . $gene . '</b>".';

  #$genee = md5($gene);

  if (!empty($employ) or !empty($password)){
  	mysql_query("INSERT INTO `users` (`id`, `staff_name`, `username`, `password`, `email`, `user_level`, `type`, `employee_id`) VALUES (NULL, '$staff_name', '$username', '$password', '$email', '2', 'a', '$employ')");
		echo 'Registration is Successful, <br /> Password generated is "<b> '.$password. '</b>" <br /> Employee_id generated is "<b>' . $employ . '</b>".';
  	#mysql_query("INSERT INTO `admin`.`users` (`id`, `employee_id`) VALUES (NULL, '$gene')");
	#echo "inserted";

  }else{
  	echo "no";
  }


	} else {
		echo "input characters";
	}

}

?>
<script type="text/javascript">
function adjust_textarea(h) {
    h.style.height = "20px";
    h.style.height = (h.scrollHeight)+"px";
}
</script>
<style type="text/css">

.form-style-4{
	max-width: 450px;
	margin:10px auto;
	font-size: 16px;
	background: #495C70;
	padding: 30px 30px 15px 30px;
	border: 5px solid #53687E;
}
.form-style-4 input[type=submit],
.form-style-4 input[type=button],
.form-style-4 input[type=text],
.form-style-4 input[type=email],
.form-style-4 textarea,
.form-style-4 label
{
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 16px;
	color: #fff;

}
.form-style-4 label {
	display:block;
	margin-bottom: 10px;
}
.form-style-4 label > span{
	display: inline-block;
	float: left;
	width: 150px;
}
.form-style-4 input[type=text],
.form-style-4 input[type=password],
.form-style-4 input[type=date],
.form-style-4 input[type=datetime],
.form-style-4 input[type=number],
.form-style-4 input[type=search],
.form-style-4 input[type=time],
.form-style-4 input[type=url],
.form-style-4 input[type=email] 
{
	background: transparent;
	border: none;
	border-bottom: 1px dashed #83A4C5;
	width: 275px;
	outline: none;
	padding: 0px 0px 0px 0px;
	font-style: italic;
}
.form-style-4 textarea{
	font-style: italic;
	padding: 0px 0px 0px 0px;
	background: transparent;
	outline: none;
	border: none;
	border-bottom: 1px dashed #83A4C5;
	width: 275px;
	overflow: hidden;
	resize:none;
	height:20px;
}

.form-style-4 textarea:focus, 
.form-style-4 input[type=text]:focus,
.form-style-4 input[type=password],:focus,
.form-style-4 input[type=date]:focus,
.form-style-4 input[type=datetime]:focus,
.form-style-4 input[type=number]:focus,
.form-style-4 input[type=search]:focus,
.form-style-4 input[type=time]:focus,
.form-style-4 input[type=url]:focus,
.form-style-4 input[type=email]:focus
{
	border-bottom: 1px dashed #D9FFA9;
}

.form-style-4 input[type=submit],
.form-style-4 input[type=button]{
	background: #576E86;
	border: none;
	padding: 8px 10px 8px 10px;
	border-radius: 5px;
	color: #A8BACE;
}
.form-style-4 input[type=submit]:hover,
.form-style-4 input[type=button]:hover{
background: #394D61;
}
</style>
</head>


<body>
<h3> Admin Panel System </h3>

<?php
if ($user_level != 1){
	header('location: profile.php');
}
 ?>
 <div class="tabs">
    <ul class="tab-links">
        <li class="active"><a href="user.php?type=user">User Setting</a></li>
        <li><a href="level.php?type=user">Level</a></li>
        <li><a href="approve.php?type=user">Approve</a></li>
        <li><a href="register.php?type=user">Register</a></li>
    </ul>


<form class="form-style-4" action="" method="post">


<label for="field1">
<span>Staff Name</span> <input type="text" name="staff_name" required="true" />
</label>
<label for="field2">
	<span>Username</span> <input type="text" name="username" required="true" />
</label>
<label for="field4">
<span>Email Address</span><input type="email" name="email" required="true" />
</label>
<label>
<span>&nbsp;</span><input type="submit" value="Register" name="submit" />
</label>

</form>
</div>

</body>
</html>