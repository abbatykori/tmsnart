<?php
function post($key) {
    if (isset($_POST[$key]))
        return $_POST[$key];
    return false;
}

$mysql = new mysqli ('localhost', 'transmt1', '1brah1m', 'coming-soon') or die ('cannot connect to db');
echo "<br>Connection Succesful";
//if (!post('emailx'))
//   exit;
//echo "<br>TextField isn't empty";
$email_address=$_POST['emailx'];

$email_address = mysql_real_escape_string($email_address);
$email_address = htmlspecialchars ($email_address);
echo "<br>Value for email: ".$email_address;
$query = "INSERT INTO emails VALUES ('','$email_address')";
echo "<br>Query: ".$query;
if ($updateDB = $mysql-> query("$query") or die ($mysql->error)){
		 echo $email_address;	
	}
$mysql->close();

 ?>