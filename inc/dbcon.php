<?php

$dbcon = mysqli_connect("localhost","root","") or die("접속실패 메세지");

mysqli_select_db($dbcon,"maxim");

mysqli_set_charset($dbcon,"utf8");

?>