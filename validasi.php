<html lang="en">
<head>
	<title>form login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="styleshet"href=css/bootstrap.css">
	<scipt src="js/jquery.js"></scipt> 
</head>
    <div class="container">
<body>
<?php
session_start();
$valid_username=$_POST['user'];
$valid_password=$_POST['pass'];
$koneksi=mysql_connect("localhost","root","");
$db=mysql_select_db("login");
$query="SELECT" *from userpass WHERE user='$valid_username'and
pass='valid_password'";

if($data=mysql_fetch_array($result))
{
  $_SESSION["start_llogin"]=1
  $_SESSION["user"]=$_POST["user"];
  $_SESSION["pass"]=$_POST["pass"];

  header("location:homepage.php"); //redirect ke homepage

}
else{
  echo"username atau password salah <br><br>"
  die("silahkan klik <a href='login.php'>disini </a> untuk login lagi");
}
?>
</body>
</html>