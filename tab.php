<?php 
include 'include/connect.php' ;
include 'include/functions.php';
include 'include/title_bar.php';



?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/tab.css" />
    <link rel="stylesheet" type="text/css" href="css/table.css" />
    <script type="text/javascript" src="script/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="script/tab.js" ></script>
</head>
<body>
<form action="" method="POST">
    <div class="tabs">
    <ul class="tab-links">
        <li class="active"><a href="#tab1">Status of Leave</a></li>
        <li><a href="#tab2">Approved Leave</a></li>
        <li><a href="#tab3">Cancel Leave</a></li>
    </ul>
 
    <div class="tab-content">
        <div id="tab1" class="tab active">
            <table>
               <tr>
               <th>Type</th>
               <th> Status</th>
               <th>Leave From</th>
               <th>Leave To </th>
               </tr> 
            
            <?php
            $list_tab = mysql_query("SELECT id, type_of_leave, status,employee_id, `from`, `to` FROM apply_for_leave WHERE employee_id = '$employee_id'");
            while($run_tab = mysql_fetch_array($list_tab)){
            $u = $run_tab['id'];
            $type = $run_tab['type_of_leave'];
            $stat = $run_tab['status'];
            $from = $run_tab['from'];
            $to = $run_tab['to'];

            if ($stat == 2){

                ?>

            <tr><td>
                <?php echo "$type "; ?>
            
            
            </td><td>Pending</td>
            <td> <?php echo "$from"; ?></td>
            <td><?php echo "$to"; ?></td>

            <?php 
        }elseif ($stat == 4) {
            # code...
              ?>
              <tr><td>
                  <?php echo "$type"; ?>
              </td><td>Rejected</td> </tr> 
              <?php 
        } 

            } ?>

            </tr>
            </table>
        </div>
 
        <div id="tab2" class="tab">
            <table>
            <tr>
            <th>Type</th>
            <th>Status </th>
            <th>Leave From</th>
            <th>Leave To</th>
            </tr>
            
            <?php

            $list_tab = mysql_query("SELECT id, type_of_leave, status,employee_id, `from`, `to` FROM apply_for_leave WHERE employee_id = '$employee_id'");
            while($run_tab = mysql_fetch_array($list_tab)){
                $u = $run_tab['id'];
                $type = $run_tab['type_of_leave'];
                $stat = $run_tab['status'];
                $from = $run_tab['from'];
                $to = $run_tab['to'];
    
            if ($stat == 3){

                ?>
                <tr><td>
                <?php
                echo "$type";?>

            </td><td> Approved </td>
            <td> <?php echo "$from"; ?></td>
            <td><?php echo "$to"; ?></td>
            <?php } } ?>
            </tr>
            </table>
        </div>
 
        <div id="tab3" class="tab">
            <table>
               <tr>
               <th>Type</th>
               <th> Status</th>
               <th>Leave From</th>
               <th>Leave To</th>
               <th>Action</th>
               </tr> 
            
            <?php
                     
            $list_tab = mysql_query("SELECT id, type_of_leave, submit_type, status,employee_id, `from`, `to` FROM apply_for_leave WHERE employee_id = '$employee_id'");
            while($run_tab = mysql_fetch_array($list_tab)){
                $u_id = $run_tab['id'];
                $type = $run_tab['type_of_leave'];
                $stat = $run_tab['status'];
                $from = $run_tab['from'];
                $to = $run_tab['to'];
                $u_submit_type = $run_tab['submit_type'];
    

            if ($stat == 2){
                ?>
                <tr><td>

                <?php echo "$type"; ?>

            </td><td>Pending</td>
            <td> <?php echo "$from"; ?></td>
            <td><?php echo "$to"; ?></td>
            <td><?php echo "<button><a href='cancel_leave.php?u_id=$u_id&status=$stat'>Cancel</a></button>"; ?></td>
            <?php } }  ?>
            </tr>
            </table>
        </div>
 
        
    </div>
</div>

</form>
</body>
</html>
