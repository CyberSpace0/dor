<?php
$host = "db_mysql";
$user="root";
$pass ="root";
$database = "KSA";
$port = 3306;
$connect = mysqli_connect($host,$user,$pass,$database,$port);
if(mysqli_connect_errno()){
    die("cannot connect: ".mysqli_connect_error());
}
$id = intval($_POST['uuid']);
$query = "select * from users where id=".$id;
$result = mysqli_query($connect,$query);
$x = mysqli_fetch_all($result);
$username = $x[0][1];
$password = $x[0][2];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body style="background-color: gray;">
<center><br><br><br><br><br>
<nav style="background-color: darkslateblue;width: 90%;">
<br><br>
<br><br><br><br><br><br><br><br><br><br>

<form action="" method="post">
<a>Enter id for user</a>
    <input name="uuid" type="username" placeholder="Enter Id For User">
    <input name="submit"type="submit" value="send">
</form><br><br><br>
<?php 

echo '<a style="color:white" >username is '.$username.'<br> password is '.$password.'</a>';


?>
<br><br><br><br><br><br><br><br><br>
</nav>
</center>

</body>
</html>
