<?php 

include 'include/connect.php';
include 'include/functions.php';



if (isset($_POST['recover'])) {
	# code...
	$employe = $_POST['employe'];

	if(!empty($employe)){
		$recover_pass = mysql_query("SELECT employee_id, password, username, email FROM `admin`.`users` WHERE employee_id = '$employe' OR username = '$employe' OR email = '$employe' ");
		
		while ($recover = mysql_fetch_array($recover_pass)) {
			# code...
			$employee_id = $recover['employee_id'];
			$username = $recover['username'];
			$email = $recover['email'];
			$password = $recover['password'];

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
  

			mysql_query("UPDATE `admin`.`users` SET `password`= '$password' WHERE `users`.`employee_id` = '$employee_id'  ");
				echo "Your new Password is $password. Please change password upon login into account";

			#echo "$password";
		} 
	}
		
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Forgot Password</title>
	<script type="text/javascript">
//auto expand textarea
function adjust_textarea(h) {
    h.style.height = "45px";
    h.style.height = (h.scrollHeight)+"px";
}
</script>

	<style type="text/css">
	body{
	background: #348A96;
}
.form-style-8{
	font-family: 'Open Sans Condensed', arial, sans;
	width: 450px;
	padding: 30px;
	background: #FFFFFF;
	margin: 150px auto;
	box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
	-moz-box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
	-webkit-box-shadow:  0px 0px 15px rgba(0, 0, 0, 0.22);

}
.form-style-8 input[type="text"],
.form-style-8 input[type="date"],
.form-style-8 input[type="datetime"],
.form-style-8 input[type="email"],
.form-style-8 input[type="number"],
.form-style-8 input[type="search"],
.form-style-8 input[type="time"],
.form-style-8 input[type="url"],
.form-style-8 input[type="password"],
.form-style-8 textarea,
.form-style-8 select 
{
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	outline: none;
	display: block;
	width: 100%;
	padding: 7px;
	border: none;
	border-bottom: 1px solid #ddd;
	background: transparent;
	margin-bottom: 10px;
	font: 16px Arial, Helvetica, sans-serif;
	height: 45px;
}
.form-style-8 h2{
	background: #4D4D4D;
	text-transform: uppercase;
	font-family: 'Open Sans Condensed', sans-serif;
	color: #797979;
	font-size: 18px;
	font-weight: 100;
	padding: 20px;
	margin: -30px -30px 30px -30px;
	}

	.form-style-8 input[type="button"],
	.form-style-8 input[type="submit"]{
	-moz-box-shadow: inset 0px 1px 0px 0px #45D6D6;
	-webkit-box-shadow: inset 0px 1px 0px 0px #45D6D6;
	box-shadow: inset 0px 1px 0px 0px #45D6D6;
	background-color: #2CBBBB;
	border: 1px solid #27A0A0;
	display: inline-block;
	cursor: pointer;
	color: #FFFFFF;
	font-family: 'Open Sans Condensed', sans-serif;
	font-size: 14px;
	padding: 8px 18px;
	text-decoration: none;
	text-transform: uppercase;
}
.form-style-8 input[type="button"]:hover, 
.form-style-8 input[type="submit"]:hover {
	background:linear-gradient(to bottom, #34CACA 5%, #30C9C9 100%);
	background-color:#34CACA;
}
	</style>
</head>
<body>
<div class="form-style-8">
<h2>Forgot Password</h2>
<form method="POST" action="">
	
<input type="text" placeholder="enter username" name="employe"> <input type="submit" name="recover">
<a href="login.php"> <input type="button" value="Back to Login"></a>



</form>
</div>
</body>
</html>