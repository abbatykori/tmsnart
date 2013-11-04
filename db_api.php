<?php
function post($key) {
    if (isset($_POST[$key]))
        return $_POST[$key];
    return false;
}

$mysql = new mysqli ('localhost', 'root', '', 'pre_launch_emails') or die ('cannot connect to db');

if (!post('emailx'))
   exit;

$email_address=$_POST['emailx'];

$email_address = mysql_real_escape_string($email_address);
$email_address = htmlspecialchars ($email_address);
echo $email_address;
echo $query;
$query = "INSERT INTO EMAILS VALUES ('','$email_address')";
if ($updateDB = $mysql-> query("$query") or die ($mysql->error)){
		 echo $email_address;	
	}


 ?>