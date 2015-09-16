<?php

include 'include/connect.php';
include 'include/functions.php';

session_destroy();

header('location: index.php');

 ?>