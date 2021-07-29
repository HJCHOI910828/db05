<?
    session_start();
    include("db_connect.php");
    $no=$_POST["no"];
	$title=$_POST["title"];
	$content=$_POST["content"];
    $sql="update notice set title='$title',content='$content' where no=$no";
	mysqli_query($conn,$sql);
?>
    <meta http-equiv="refresh" content="0;url=notice.php">
