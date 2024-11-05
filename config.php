<?php define('DBSERVER','localhos t'); 
define('DBUSERNAME','root') ; define('DBPASSWORD',''); define('DBNAME','question_bank'); 
// Create connection 
$conn = mysqli_connect(DBSERVER, DBUSERNAME ,DBPASSWORD , DBNAME); 
// Check connection if 
(!$conn) { die("Connection failed: " . mysqli_connect_error); 
} else { echo ""; 
} 
?> 
