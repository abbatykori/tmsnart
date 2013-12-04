// <?php
// //the example of inserting data with variable from HTML form
// //input.php
// mysql_connect("localhost","root","");//database connection
// mysql_select_db("pre_launch_emails");

// echo "<br> Connection Succesful";

// $email_address=$_POST['emailx'];
// $email_address = mysql_real_escape_string($email_address);
// $email_address = htmlspecialchars ($email_address);
// echo "<br>Email:"+$email_address;
// //inserting data order
// $order = "INSERT INTO emails VALUES ('', '$email_address','')";
 
// //declare in the order variable
// $result = mysql_query($order);  //order executes
// if($result){
//     echo("<br>Input data is succeed");
// } else{
//     echo("<br>Input data is fail");
// }
// ?>

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
$query = "INSERT INTO EMAILS VALUES ('','$email_address','')";
if ($updateDB = $mysql-> query("$query") or die ($mysql->error)){
		 echo $email_address;	
	}


 ?>