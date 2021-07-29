<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<?
	session_start();
    include("db_connect.php");
	$title=$_POST["title"];
	$content=$_POST["content"];
	$writer=$_SESSION["id"];
	$writeday=date("Y-m-d (h:i:s) ");
	$sql="insert into notice (title,content,writer,writeday) values ('$title','$content','$writer','$writeday')";
	mysqli_query($conn,$sql);
?>
<meta http-equiv="refresh" content="0;url=notice.php">