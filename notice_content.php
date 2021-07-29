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

    <form action="notice_delete.php" name="frm1" method="post">
        <div class="content">
            <?
                $no = $_GET["no"];
                $sql = "update notice set hit=hit+1 where no=$no";
                mysqli_query($conn,$sql);
                $sql="select * from notice where no=$no";
                $rs = mysqli_query($conn,$sql);
                $row = mysqli_fetch_array($rs);
            ?>
            <table class="table table-bordered table-striped">
            <tr>
                    <td>번호</td>
                    <td><?=$row["no"]?></td>
                </tr>
                <tr>
                    <td>제목</td>
                    <td><?=$row["title"]?></td>
                </tr>
                <tr>
                    <td>내용</td>
                    <td><?=nl2br($row["content"])?></td>
                </tr>
                <tr>
                    <td>글쓴이</td>
                    <td><?=$row["writer"]?></td>
                </tr>
                <tr>
                    <td>날짜</td>
                    <td><?=$row["writeday"]?></td>
                </tr>
                <tr>
                    <td>조회수</td>
                    <td><?=$row["hit"]?></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="button" value="리스트" class="btn btn-success" onclick="location.href='notice.php'">
                        <input type="button" value="수정" class="btn btn-success" onclick="location.href='notice_edit.php?no=<?=$row["no"]?>'">
                        <input type="button" value="삭제" class="btn btn-warning" onclick="del()">
                    </td>
                </tr>
            </table>
            </form>
            
            <form action="notice_content_re.php" method="post" name="frm2">
            <table class='table table-bordered '>
                <tr class="success">
                
                <td><input type="hidden" name="no" value="<?=$no?>"></td>

                    <td>
                    <input type="text" name="content" class="form-control" placeholder="댓글 입력">
                    </td>
                    <td>
                    <input type="button" value="답변하기" class="btn btn-success" onclick="send()">
                    
                    </td>
                </tr>
                <? 
                    $sql2="select * from notice_re where p_no=$no";
                    $rs2=mysqli_query($conn,$sql2);
                    while($row2=mysqli_fetch_array($rs2)){
                ?>
                <tr>
                    <td colspan='2'>
                    <?=nl2br($row2["content"])."  /  "."by ".$row2["writer"]."  /  ".$row2["day"]?>
                    <?
                        if (isset($_SESSION["id"])) {
                        # code...
                        if ($_SESSION["id"]==$row2["writer"]) {
                            # code...
                        
                        
                    ?>
                    <a href="notice_content_del.php?no=<?=$row2["no"]?>&p_no=<?=$no?>" >
                    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </a>
                    <? 
                        } 
                    }
                    ?>
                    </td>
                </tr>
                <? } ?>
            </table>
        </form>
        </div>
    
    
    

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
}function send(){
        document.frm1.submit();
    }
    function del(){
        document.frm1.submit();
                    if(confirm("정말 삭제하시겠습니까>")){
            location.href="delete_notice.php?no=<?=$row["no"]?>"
        }
    }
    function send() {
        
        if (frm2.content.value=="") {
            alert("내용을 입력하세여")
            frm2.content.focus();
            return false;
        }
        document.frm2.submit();
    }
</script>