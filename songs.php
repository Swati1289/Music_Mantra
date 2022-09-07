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
    $sel="SELECT * FROM song";
    $result=$conn->query($sel) or die($conn->error);
}
?>
<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<form class="search" action="#">
        <input type="text" placeholder="Search" name="searchbar">
        <button type="submit"><i class="fa fa-search"></i></button>
    </form>
</html>
<?php while($row=$result->fetch_assoc()):?>
<html>
<body>
    <div class="song-lining">
<img src="<?=$row['song_img']?>" width=10% height=auto; >
<p><?=$row['song_name']?></p>
<audio controls src="<?=$row['song_path']?>" type="audio/mpeg">
    </audio>
    </div>
</body>
</html>
<?php endwhile;?>


<style>
    *{
    box-sizing: border-box;
}
/* style the search field */
form.search input[type=text]{
    padding: 10px;
    padding-top:11px;
    font-size: 16px;
    border: 1px solid transparent;
    float: left;
    width: 40%;
    background: darkgrey;
}

/*styling the submit button*/
form.search button{
    float: left;
    width: 10%;
    padding: 10px;
    background: powderblue;
    color: white;
    font-size: 21px;
    border: 1px solid snow;
    border-left: none;
    cursor: pointer;
}
form.search button:hover{
    background: pink;

}
/*clearing floats*/
form.search::after{
    content: "";
    clear: both;
    display: table;
}
</style>
    