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
    $sel="SELECT * FROM artist";
    $result=$conn->query($sel) or die($conn->error);
}
?>
<html>
    <head>
    <title>MUSIC MANTRA-artist</title>
        <link href="https://fonts.googleapis.com/css?family=Dokdo" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Hachi Maru Pop" rel="stylesheet">
    </head>
    
<main>
    <h1>ARTIST</h1>
<hr>
<hr>
<hr>
<?php while($row=$result->fetch_assoc()):?>
    <div class="container">
        <div class="images">
            <a href="sa.php"><img src="<?=$row['artist_img']?>" width=5% height=auto; ></a>
            <div class="names"><p><?=$row['artist_name']?></p></div>
        </div>
    </div>
     
</main>
    </html>
<?php endwhile;?>









<style type="text/css">
 
 *{
   margin: 0px;
}

h1{
    font-size:60px;
 text-align: center;
 font-family: 'Hachi Maru Pop',cursive;
}
p{
 font-size: 55px;
 font-family: 'dokdo',cursive;
}
.container{
    max-width: 600px;
    margin:20px;
    background-color: white;
    overflow:auto;
    display: inline;
}
.images{
    margin:10px;
    width: 390px;
      float: left;
     padding: 15px;
     border: 1px solid #ccc;

}

.images img{
    width: 100%;
    height: 50%;

}

img:hover{
  transform: scale(1.3,1.3);
  transition: .3s transform;

}
.names{
    text-align:centre;
    padding: 15px;
}
</style>