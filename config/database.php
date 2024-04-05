<?php
define('DB_HOST','localhost');
define('DB_USER','moiz');
define('DB_PASS','moiz1022');
define('DB_NAME','moiz_dev'); 


$conn=new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

if($conn->connect_error){
die('connection Failed'.$conn->connect_error);

}

echo 'CONNECTED';

