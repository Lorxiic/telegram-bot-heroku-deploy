<?php 

$db_host = "us-cdbr-east-06.cleardb.net";

$db_user = "b62ccc370d47b5";

$db_pass = "5afeecdf";

$db_name = "heroku_a74d99c0cf8788f";

$connect = mysqli_connect($db_host,$db_user,db_pass,$db_name) or die("database connection error");
