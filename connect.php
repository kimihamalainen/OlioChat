<?php
 $name = filter_input(INPUT_POST, 'name');
 $email = filter_input(INPUT_POST, 'email');
 $phone = filter_input(INPUT_POST, 'phone');
 $message = filter_input(INPUT_POST, 'message');
 if (!empty($name)){
 if (!empty($email)){
 if (!empty($phone)){
if (!empty($message)){
$host = "10.9.0.60";
$dbusername = "s1700512";
$dbpassword = "9u8_GZQ_";
$dbname = "s1700512";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO problems (name, email, phone, message)
values ('$name','$email','$phone','$message')";
if ($conn->query($sql)){
echo "Your Message has beens sent. We will contact you soon ! <a href='http://localhost/Project_Help_page/ProjectHelpPage/userAccount.php?logoutSubmit=1'>Log out</a>";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Fields should not be empty";
die();
}
}
else{
echo "fields should not be empty";
die();
}
 }
 }
 
?>