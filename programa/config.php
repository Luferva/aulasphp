<?php
$con = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($con, 'programa');

if(!$con || !$db) echo mysqli_error($con);

?>