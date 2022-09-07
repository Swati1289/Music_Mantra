<?php
$Name = filter_input(INPUT_POST, 'Name');
$Phone = filter_input(INPUT_POST,'Phone');
$Email = filter_input(INPUT_POST,'Email');
if (!empty($Name)){
if (!empty($Phone)){
if (!empty($Email)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "Swas@2000";
$dbname = "music_mantra";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO user(user_name,phone,email)
values ('$Name','$Phone','$Email')";
if ($conn->query($sql)){
header("Location: login.html");
exit();
}
else{
echo "user already exit";
}
$conn->close();
}
}
else{
echo "Email field should not be empty";
die();
}
}
else{
echo "Phone field should not be empty";
die();
}
}
else{
echo "Name should not be empty";
die();
}
?>