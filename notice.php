<?
    session_start();
    include "db_connect.php";
?>
<!DOCTYPE html>
<html lang="kr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NINE circles</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">    
</head>
<body>
    <div class="container-fluid">
    <!-- 네비게이션 시작 -->
        <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php"><img src="imgs/logo.png" alt="" srcset=""></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">블로그 소개 <span class="sr-only">(current)</span></a></li>
            <li><a href="#">포트폴리오</a></li>
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">게시판<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="#">C Language</a></li>
                <li><a href="#">Java Language</a></li>
                <li><a href="#">Kotlin Language</a></li>
                <li class="divider"></li>
                <li><a href="#">안드로이드 스튜디오 개발</a></li>
                <li class="divider"></li>
                <li><a href="#">어플 활용법</a></li>
            </ul>
            </li>
        </ul>
        <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-warning">검색</button>
        </form>
        <ul class="nav navbar-nav navbar-right">
            <? if(isset($_SESSION["id"])){ ?>
            <li><a href="logout.php">로그아웃</a></li>
            <li><a href="edit.php">마이페이지</a></li>
            <li><a href="javascript:delete_account()">회원탈퇴</a></li>
            <li><a href="notice.php">공지사항</a></li>
            <li><a href="qna.php">Q&A</a></li>
            <li><a href="download.php">자료실</a></li>
            <?}else{?>
            <li><a href="login.php">로그인</a></li>
            <li><a href="signup.php">회원가입</a></li>
            <li><a href="notice.php">공지사항</a></li>
            <li><a href="qna.php">Q&A</a></li>
            <li><a href="download.php">자료실</a></li>
            <?}?>
        </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
    </nav>
    <!-- 네비게이션바 끝 -->
    <!--공간 띄우기-->
    <div class="space"></div>
    <br><br><br><br>

            <form name="frm1" method="post">
            <table class="table table-bordered table-hover table-striped">
            <tr><td colspan='5' align="center"><h2>공지사항</h2></td></tr>
            <tr>
            <th>번호</th><th>제목</th><th>글쓴이</th><th>날짜</th><th>조회수</th>
            </tr>
            <?
            if(isset($_GET["page"])){
                $page=$_GET["page"];
                $group=ceil($page/5);
            }else{
                $page=1;
                $group=1;
            }
            
            $sql2="select count(*) as cnt from notice";
                $rs2=mysqli_query($conn,$sql2);
                $row2=mysqli_fetch_array($rs2);
                $cnt=$row2["cnt"];
                $pageCount=($cnt/10);
                $groupCount=ceil($pageCount/5);
                $startRow=($page-1)*10;
                
                $sql = "select * from notice order by no desc limit $startRow,10";

                $rs = mysqli_query($conn,$sql);

                while($row=mysqli_fetch_array($rs)){
            ?>
            <tr>
                <td><?=$row["no"]?></td>
                <td>
                <?php if(isset($_SESSION["id"])){ ?>    
                    <a href="notice_content.php?no=<?=$row["no"]?>">
                        <?=$row["title"]?>
                </a></td>
                <? }else{ ?>
                <?=$row["title"]?>
                <? } ?>
                
                <td><?=$row["writer"]?></td>
                <td><?=$row["writeday"]?></td>
                <td><?=$row["hit"]?></td>
            </tr>
                <? } ?>
                <tr><td colspan="5" align="center">
                <?
                //이전 5개로 돌아가기 
                if($group>1){
                    // $firstPage=$page=1
                    echo "<a href = 'notice.php?page=1'> 처음으로 &nbsp; &nbsp;</a>";
                }
                if($group>1){
                    $prevPage=($group-2)*5+1;
                    echo "<a href ='notice.php?page=$prevPage'>이전</a>";
                }
                $startPage=($group-1)*5+1;
                $endPage=$startPage+4;
                for($i=$startPage;$i<=$endPage;$i++){
                    //페이지카운트 범위를 벗어나면 문장을 종효시킨다.
                    if($i>$pageCount){break;}
                    if($page == $i){
                        echo "<a href='notice.php?page=$i'> <font color='red'><b>
                        [$i]</font></b> </a>";
                    }else{
                    echo "<a href='notice.php?page=$i'>[$i] </a>";
                }
            }
                $nextPage=$group*5+1;
                if($group<$groupCount){
                echo "<a href='notice.php?page=$nextPage'> 다음</a> &nbsp; &nbsp;</a>";
                }
                $lastPage=$group*5+15;
                if($groupCount>0 && $groupCount <5){
                    echo "<a href = 'notice.php?page=$lastPage'>마지막으로</a>";
                }
            ?>
                </td></tr>
            <?
            if(isset($_SESSION["id"])){
                if($_SESSION["id"]=="admin"){
            ?>
            <tr>
            <td colspan='5' align="center">
            <input type="button" value="벌크 추가" onclick="location.href='bulk.php'"class="btn btn-warning">
            <input type="button" value="공지사항 추가" class="btn btn-primary"onclick="location.href='notice_write.php'" id="btn">
            <input type="button" value="공지사항 삭제" class="btn btn-primary" onclick="bulk_del()" id="btn">
            </td>
            </tr>
            <?
                }   
            }
            ?>
            </form>

        <form action="notice_search.php" name="frm_search" method="post">
		<tr>
			<td colspan='5' align='center'>
            <div class="btn-group" role="group" aria-label="...">
            <button type="button" class="btn btn-default">작성자</button>
            <button type="button" class="btn btn-default">제목</button>
            <button type="button" class="btn btn-default">내용</button>
            </div>&nbsp;&nbsp;
				<input type="text" name="searchString" placeholder="검색">
				<input type="button" value="검색" class="btn btn-primary" onclick="sendString()">
                </td>
            </tr>
            </table>
        </form>
    

    <!-- footer start-->
        <div class="gap"></div>
        <header class="content1">
            <div class="container">
                All rights reserved by 9pixelstudio since 2001.
            </div>
        </header>
        <!-- footer end-->
    
        








    <!-- jQuery (부트스트랩의 자바스크립트 플러그인을 위해 필요합니다) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <!-- 모든 컴파일된 플러그인을 포함합니다 (아래), 원하지 않는다면 필요한 각각의 파일을 포함하세요 -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.fancybox.js"></script>
        <script src="js/animatescroll.min.js"></script>

</body>
</html>
<script>
    
    function delete_account(){
    if(confirm("회원탈퇴를 하시겠습니까?")){
        location.href="delete_account.php";
    }
}

</script>