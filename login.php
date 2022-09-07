<?php
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
    $Name=$_POST["Name"];
    $Phone=$_POST["Phone"];

    $fetch="SELECT user_id,phone FROM user WHERE user_name='".$Name."'";
    $result1=$conn->query($fetch) or die($conn->error);
    if(mysqli_num_rows($result1)>0){
    $row1=$result1->fetch_assoc();
    $id=$row1["user_id"];
    $phon=$row1["phone"];
    if($phon==$Phone){
        header("Location:home.html");
    }
    else{
        echo "Wrong phone number";
    }
    }
    else{
        header("Location:signup.html");
        exit();
    }


}
?>