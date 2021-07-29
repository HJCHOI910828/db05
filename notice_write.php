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

    
    <form name="frm1" method="post" action="notice_write_ok.php">
    <div class="content">
                <table class="table table-bordered table-striped">
                    <tr>
                    <td><label for="exampleInputFile">공지사항 제목</label></td>
            <td><input type="text" class="form-control" placeholder="제목 입력" name="title"></td>
                    </tr>
                    <tr>        
                <td><label for="exampleInputFile">내용 입력</label></td>
                <td><input type="text" class="form-control" placeholder="내용 입력" name="content"></td>
                    </tr>
                    <tr>
                        <td colspan='2' align='center'>
                            <input type="button" class="btn btn-primary" value="확인" onclick="send()">
                            <input type="button" class="btn btn-primary" value="취소" onclick="location.href='notice.php'">
                        </td>
                    </tr>
                </table>
                </div>
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
    function send(){
        document.frm1.submit();
    }
    
</script>