<?php 


?>

<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Login</title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
<script type="text/javascript">
//auto expand textarea
function adjust_textarea(h) {
    h.style.height = "45px";
    h.style.height = (h.scrollHeight)+"px";
}
</script>
<style>
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
.form-style-8 textarea{
	resize:none;
	overflow: hidden;
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
<?php
include 'include/connect.php';
include 'include/functions.php';
include 'include/title_bar.php';
?>

<div class="form-style-8">
  <h2>Login to your account</h2>
  <form method="POST" action="">
  <?php 
  

if (isset($_POST['login'])){
	$employee_id = $_POST['employee_id'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	if(!empty($username) or !empty($password)){
		$check_login = mysql_query("SELECT id, type, employee_id FROM users WHERE username = '$username'AND password = '$password' AND employee_id = '$employee_id' ");
		if(mysql_num_rows($check_login) == 1){
			$run = mysql_fetch_array($check_login);
			$employ_id = $run['employee_id'];
			$id = $run['id'];
			/**echo "$id";
			echo "$password";

			echo "$employee_id";
		}
	}
}**/
			
			$type = $run['type'];
			if($type == 'd'){
				echo "Your account has been deactivated";

			} elseif ($type == 'a') {
				$_SESSION['employ_id'] = $employ_id;

				header('location: index.php');

			}
		}else {
			echo "wrong username";
		}
	}
	else{
		echo "Field empty";
	}
}

if (isset($_POST['forget_password'])) {
	# code...
	echo "<a href = 'forget.php'></a>";
}
?>
	<input type="text" name="employee_id" placeholder="employee_id" />
    <input type="text" name="username" placeholder="Username" />
    <input type="password" name="password" placeholder="Password" />
    <input type="submit" value="Login" name="login" /> <a href="forget.php"><input type="button" name="" value="Forgot Password"></a>
  </form>
</div>

</body>
</html>

