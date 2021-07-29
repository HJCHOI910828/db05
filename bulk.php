<?php
include("db_connect.php");
for ($i=1;$i<=100;$i++){
    $sql = "insert into notice(title,content,writer,writeday) values
        ('공지사항테스트$i','내용','admin','2021-05-10')";
        mysqli_query($conn,$sql);
}
?>
    <meta http-equiv="refresh" content="0;url=notice.php">        
