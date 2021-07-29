<?
        session_start();
        include("db_connect.php");
        for ($i=1;$i<=100;$i++){
        $sql = "delete from notice where title LIKE'공지사항테스트%$i'";
            mysqli_query($conn,$sql);
        }
?>  
    <meta http-equiv="refresh" content="0;url=notice.php">        
