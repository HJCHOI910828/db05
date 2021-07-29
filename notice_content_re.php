<?
    session_start();
    include ("db_connect.php");
    $no=$_POST["no"];
    $content=$_POST["content"];
    $writer=$_SESSION["id"];
    $day=date("Y-m-d");
    
    $sql="insert into notice_re(content, writer, day, p_no) values('$content','$writer','$day','$no')";
    mysqli_query($conn,$sql);

?>

<meta http-equiv = "refresh" content="0;url=notice_content.php?no=<?=$no?>">