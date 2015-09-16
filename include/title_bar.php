<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title></title>
	<script type="text/javascript">
//auto expand textarea
function adjust_textarea(h) {
    h.style.height = "45px";
    h.style.height = (h.scrollHeight)+"px";
}
</script>
	<link rel="stylesheet" type="text/css" href="css/title_bar.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<script type="text/javascript" src="script/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="script/title_bar.js" ></script>
<style>
body{
	background: ;
}
</style>
</head>
<body>
<div>
	<?php 
	if (loggedin()) {
		# code...
	?>

	<nav class="menu">
    <ul class="active">
        <li class="current-item"><a href="index.php">Home</a></li>
        <li><a href="profile.php">Profile</a>
            <ul class="sub-menu">
                <li><a href="change_profile.php">Change Profile</a></li>
            </ul>
        </li>
           
        <li><a href="#">Leave</a>
        	<ul class="sub-menu">
        		<li><a href="tab.php">Status</a></li>
        		<li><a href="apply.php">Apply</a></li>
        		
        	</ul>
        	</li>
        	
        <li><a href="logout.php">Log Out</a></li>
        <li class="user">[Welcome<?php echo " $username"; ?>]</li>
    </ul>
	 
    <a class="toggle-nav" href="#">&#9776;</a>
    <ul>
 	<label></label></ul>
    <form class="search-form">

        <input type="text">
        <button>Search</button>
    </form>
</nav>

<footer class="footer">
    <ul class="active">
        <li>&#169;PaulFikayomi 2015</li>
        
    </ul>
</footer>

	
	<?php
	} elseif(!loggedin()) {
		#header('location: login.php');
	?>
	<nav class="menu">
    <ul class="active">
        <li class="current-item"><a href="homepage.php">Home</a></li>
        
           
        <li><a href="login.php">Login</a></li>
        <li><a href="">Contact Us</a></li>
        <li><a href="aboutus.php">About Us</a></li>
        	
        	
        
    </ul>
	 
    <a class="toggle-nav" href="#">&#9776;</a>
    <ul>
 	<label></label></ul>
    <form class="search-form">

        <input type="text">
        <button>Search</button>
    </form>
</nav>

<footer class="footer">
    <ul class="active">
        <li>&#169;PaulFikayomi 2015</li>
        
    </ul>
</footer>
	
	<?php
	} 
	?>

</div>

</body>
</html>