<!DOCTYPE html>
<html>
<head>
	<title>Admin_Panel</title>
	<link rel="stylesheet" type="text/css" href="css/tab.css" />
    <script type="text/javascript" src="script/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="script/tab.js" ></script>
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
 <div class="tabs">
    <ul class="tab-links">
        <li class="active"><a href="user.php?type=user">User Setting</a></li>
        <li><a href="level.php?type=user">Level</a></li>
        <li><a href="approve.php?type=user">Approve</a></li>
        <li><a href="register.php?type=user">Register</a></li>
    </ul>
 
    <div class="tab-content">
        <div id="tab1" class="tab active">
            
            
        </div>
 
        <div id="tab2" class="tab">
            <p>Tab #2 content goes here!</p>
            
        </div>
 
        <div id="tab3" class="tab">
            <p>Tab #3 content goes here!</p>
            
        </div>
 
        <div id="tab4" class="tab">
            <p>Tab #4 content goes here!</p>
            
        </div>
    </div>
</div>
 

</body>
</html>