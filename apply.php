<?php 

include 'include/connect.php';
include 'include/functions.php';
include 'include/title_bar.php';

if (isset($_POST['submit'])){
$msg = $_POST['msg'];
$type_of_leave = $_POST['type_of_leave'];
$from = $_POST['from'];
$to = $_POST['to'];


if (!empty($first_name) or !empty($last_name) or !empty($email) or !empty($type_of_leave) or !empty($msg) ) {
	# code...

	mysql_query("INSERT INTO `apply_for_leave` (`id`, `type_of_leave`, `msg`, `status`, `submit_username`, `submit_type`, `select_name`, `employee_id`, `staff_name`, `email`, `from`, `to`) VALUES (NULL, '$type_of_leave', '$msg', '2', '$submit_username', '$submit_type', '$select_name', '$employee_id', '$staff_name', '$email', '$from', '$to')");
	echo "Sent Successful";	


}else{
	echo "Input Characters";

}



#echo "First name is: $first_name <br />";
#echo "Last name is: $last_name <br />";
#echo "$email <br />";
#echo "$msg <br />";
#echo "$type_of_leave <br />";
#echo "$submit_username <br />";
#echo "$select_name <br />";
#echo "$submit_type";

}

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Apply For Leave</title>
<link rel="stylesheet" type="text/css" href="css/apply.css">
</head>
<body>
<form method="POST" action="" class="smart-green">

<h1> Apply for Leave 
	<span>Please fill text fields</span>
</h1>

<label>
        <span>Your Name :</span>
        <input id="name" type="text" value='<?php echo "$staff_name";?>' disabled = "true" required= "required" />
    </label>
    
    <label>
        <span>Your Email :</span>
        <input id="email" type="email" value='<?php echo "$email"; ?>' required = "true" disabled="true" />
    </label>
    </label> 
     <label>
        <span>Type of Leave :</span><select name="type_of_leave">
        <option value="Sick Leave">Sick</option>
        <option value="Administrative Leave">Adminstrative Leave</option>
        <option value="General Leave">General Leave</option>
        <option value="Privilege Leave">Privilege Leave</option>
        </select>
    </label>
    <label>
    	<span>Date :</span>
    	<label>From</label><input type="date" name="from" /> <label>To</label><input type="date" name="to">
    </label>
    <label>
        <span> Your Message :</span>
        <textarea id="message" name="msg" required = "true"></textarea>
        
     <label>
        <span>&nbsp;</span> 
        <input type="submit" class="submit" value="Send" name="submit" /> 
    </label>


</form>

</body>
</html>