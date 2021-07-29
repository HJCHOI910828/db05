<?
session_start();
include("db_connect.php");

$id=$_SESSION["id"];
$password = $_POST["password"];
$name= $_POST["name"];
$addr = $_POST["addr"];
$tel = $_POST["tel"];
$job = $_POST["job"];
$grade = $_POST["grade"];
$gender = $_POST["gender"];

$sql = "update member set password='$password', name='$name',
        addr='$addr',tel='$tel',job='$job',grade='$grade',gender='$gender'
        where id='$id'";

mysqli_query($conn,$sql)
?>
<meta http-equiv="refresh" content="0;url=index.php">
<meta charset="UTF-8">
