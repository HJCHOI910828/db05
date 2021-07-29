<?
    session_start();
    include "db_connect.php";
?>
<!DOCTYPE html>
<html lang="en">
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
    <!-- carousel 시작 -->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        <li data-target="#carousel-example-generic" data-slide-to="4"></li>
        <li data-target="#carousel-example-generic" data-slide-to="5"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
        <img src="imgs/1.jpg" alt="...">
        </div>
        <div class="item">
        <img src="imgs/2.jpg" alt="...">
        </div>
        <div class="item">
        <img src="imgs/3.jpg" alt="...">
        </div>
        <div class="item">
        <img src="imgs/4.jpg" alt="..."> 
        </div>
        <div class="item">
        <img src="imgs/5.jpg" alt="...">
        </div>
        <div class="item">
        <img src="imgs/7.jpg" alt="...">
        </div>
        ...
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
        <!-- carousel 끝 -->

        <!--Icons 시작-->
        <div class="gap"></div>
        <div class="container">
            <div class="row">
            <div class="col-xs-6 col-md-3 icontxt">
                <a href="#">
                <span class="glyphicon glyphicon-asterisk icons"></span>
                <h4>C &amp; C++</h4>
                <p>모든 아키텍쳐와 운영체제에서 지원하는 언어.</p>
                </a>
            </div>
            <div class="col-xs-6 col-md-3 icontxt">
                <a href="#">
                <span class="glyphicon glyphicon-asterisk icons"></span>
                <h4>Python</h4>
                <p>인터프리터 언어이면서 우수한 자료형과 다양한 모듈 등을 제공.</p>
                </a>
            </div>
            <div class="col-xs-6 col-md-3 icontxt">
                <a href="#">
                <span class="glyphicon glyphicon-asterisk icons"></span>
                <h4>Kotlin</h4>
                <p>간결하지만 높은 생산성을 지닌 구글의 안드로이드 공식 언어.</p>
                </a>
            </div>
            <div class="col-xs-6 col-md-3 icontxt">
                <a href="#">
                <span class="glyphicon glyphicon-asterisk icons"></span>
                <h4>R</h4>
                <p>강력한 통계 분석.</p>
                </a>
            </div>
            </div>
        </div>
        <!--Icons end-->

        <!-- About Start-->
        <div id="about"></div>
        <header class="content1">
            <div class="container">
                <h1><small>NINE Std. 는 여러 프로그래밍언어에 대해 입문,심화 학습을 제공합니다.</small></h1>
                <p>어플개발, 데이터 분석 최신 트렌드에대한 코드를 제공, 여러 샘플을 통한 이해를 최우선으로 학습합니다.</p>

            </div>
        </header>
        <div class="container">
            <img src="imgs/9pixel.gif" class="img-responsive" alt="" srcset="">
            <div class="row">
                <div class="col-md-4">
                    <img src="imgs/about1.jpg" class="img-responsive" alt="" srcset="">
                </div>
                <div class="col-md-8">
                    <p>
                        NINE Std. 대표 장경준은 1995년 국내 최초 ISP 인터피아 웹마스터로써 인터피아 웹사이트 기획/제작/유지보수를 담당했으며, 두산그룹 웹사이트 기획/개발/유지보수, 두산계열사 웹마스터 교육 담당, 국제 유도 연맹 웹사이트 기획/개발, 두산그룹 두산타워, 두산 베어스, 오비맥주, 국제유도 연맹 웹사이트 기획/개발/유지보수 및 쌍용아파트 웹사이트 개발,200년부터 온라인 이벤트 사이트 유텐드 웹사이트 기획/개발/마케팅 한국 본부장을 역임하였습니다. 그 외 많은 일을 하였습니다.
                    </p>
                </div>
            </div><!--row end-->
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <!--아코디언 시작-->
                    <h3>Why NINE Std.?</h3>
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        NINE Std. 학원의 강점
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    최신 IT업계에 입각한 체계적인 커리큘럼.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    강점 #2    
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    모든 작업이 가능한 초 고사양 PC.
                                </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            강점 #3
                            </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                        중견/대기업 실무경험자를 바탕으로 구성된 최고의 강사진.
                        </div>
                        </div>
                    </div>
                </div>
                        <!-- 아코디언 끝 -->

            </div>
            <div class="col-md-6">
            <!-- 저서 소개 시작 -->
            <h3>Books</h3>
            <img src="imgs/book/2.png" class="img-responsive book1">
            <img src="imgs/book/3.png" class="img-responsive book2">
            <img src="imgs/book/4.png" class="img-responsive book3">
            <!-- 저서 소개 끝 -->
            </div>
        </div> <!-- row end -->
    </div> <!-- container end -->
    <!-- about end --> 
        
    <!-- portfolio 영역 시작 -->
        <div id="portfolio"></div>
        <header class="content1">
        <h1><small>Portfolio</small></h1>
        <p>NINE Std. 수강생들의 작품입니다.</p>
        </header>

        <div class="container">
        <h2>Site Development</h2>
        <!-- carousel2 시작 -->
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
        <!-- portfolio 첫번째 사진들 배치 시작 -->
        <div class="row">
                        <div class="col-xs-3">
                        <div class="thumbnaii site">
                        <a href="imgs/portfolio/site5.jpg" class="fancybox" rel="gallery1">
                        <img src="imgs/portfolio/site5.jpg" alt="">
                        </a>
                        <h4>두바이 소반 레스토랑</h4>
                        <p>워드프레스 기반으로 제작되었으며, 두바이에서 가장 유명한 한식, 중식, 일식 레스토랑입니다.</p>
                        </div>
                        </div>
                        <div class="col-xs-3">
                        <div class="thumbnaii site">
                        <a href="imgs/portfolio/site6.jpg" class="fancybox" rel="gallery1">
                        <img src="imgs/portfolio/site6.jpg" alt="">
                        </a>
                        <h4>두바이 씨월드 레스토랑</h4>
                        <p>두바이에서 가장 유명한 레스토랑입니다. html5와 css3기반에 jQuery를 적용하였습니다.</p>
                        </div>
                        </div>
                        <div class="col-xs-3">
                        <div class="thumbnaii site">
                        <a href="imgs/portfolio/site7.jpg" class="fancybox" rel="gallery1">
                        <img src="imgs/portfolio/site7.jpg" alt="">
                        </a>
                        <h4>에이마트 온라인 쇼핑몰</h4>
                        <p>두바이 최대 아시안 푸드마켓</p>
                        </div>
                        </div>
                        <div class="col-xs-3">
                        <div class="thumbnaii site">
                        <a href="imgs/portfolio/site8.jpg" class="fancybox" rel="gallery1">
                        <img src="imgs/portfolio/site8.jpg" alt="">
                        </a>
                        <h4>스마트북스</h4>
                        <p>경제전문 서적 출판사 스마트북스의 웹사이트입니다. 웹 표준 기반으로 php를 이용하여 제작하였습니다.</p>
                        </div>
                        </div>
                    </div>
        <!-- portfolio 첫번째 사진들 배치 끝 -->
        </div>
        <div class="item">
        <!-- portfolio 두번째 사진들 배치 시작 -->
        <div class="row">
        <div class="col-xs-3">
                        <div class="thumbnaii site">
                        <a href="imgs/portfolio/site1.jpg" class="fancybox" rel="gallery1">
                        <img src="imgs/portfolio/site1.jpg" alt="">
                        </a>
                        <h4>제주관광문화산업진흥원</h4>
                        <p>제주관광문화산업진흥원 사이트로 html와 css3 그리고 jqurey와 php기반으로 제작되었습니다.</p>
                        </div>
                        </div>
                        <div class="col-xs-3">
                        <div class="thumbnaii site">
                        <a href="imgs/portfolio/site2.jpg" class="fancybox" rel="gallery1">
                        <img src="imgs/portfolio/site2.jpg" alt="">
                        </a>
                        <h4>(주)신시웨이</h4>
                        <p>국내 DB 보안 3대 회사중 하나인 신시웨이 웹 사이트입니다. html,css,javascript,jQuery,bootstrap 기반으로 제작되었습니다.</p>
                        </div>
                        </div>
                        <div class="col-xs-3">
                        <div class="thumbnaii site">
                        <a href="imgs/portfolio/site4.jpg" class="fancybox" rel="gallery1">
                        <img src="imgs/portfolio/site4.jpg" alt="">
                        </a>
                        <h4>두바이 보라카이 클럽</h4>
                        <p>두바이 최대 클럽인 보라카이 클럽 사이트입니다. 웹 표준 기반으로 제작되었습니다.</p>
                        </div>
                        </div>
                        <div class="col-xs-3">
                        <div class="thumbnaii site">
                        <a href="imgs/portfolio/site8.jpg" class="fancybox" rel="gallery1">
                        <img src="imgs/portfolio/site8.jpg" alt="">
                        </a>
                        <h4>스마트북스</h4>
                        <p>경제전문 서적 출판사 스마트북스의 웹사이트입니다. 웹 표준 기반으로 php를 이용하여 제작하였습니다.</p>
                        </div>
                        </div>
        </div>
        <!-- portfolio 두번째 사진들 배치 끝 -->
        </div>
    </div><!--corousel1-inner end-->
    </div>
        <!-- carousel2 끝 -->
        </div>
        <!-- portfolio 영역 끝 -->

        <!-- contact 영역 시작-->
        <div id="contact">
        <header class="content1">
        <h1><small>Contact</small></h1>
        <p>사이트 제작 문의 및 웹 표준 교육에 관해서 질문하는 곳입니다.</p>
        </header>
        <div class="gap"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <!--문의 폼 태그 배치-->
                    <?
                    include "db_connect.php";
                    $query = "select * from notice order by no desc limit 0,10";
                    $rs = mysqli_query($conn,$query);
                    $row = mysqli_fetch_array($rs);
                    ?>
                    <table class="table table-bordered table-hover">
                    <tr>
                        <th>제목</th>
                        <th>작성일</th>

                    </tr>
                    <? while($row=mysqli_fetch_array($rs)){ ?>
                        <tr>
                            
                            <td><?=$row["title"]?></td>
                            <td><?=$row["writeday"]?></td>
                        </tr>
                    <?}?>
                    <tr>
                        <td colspan="2" align="center">
                        <input type="button" value="공지사항 추가"class="btn btn-primary btn-lg" onclick="location.href='notice.php'">
                        </td>
                    </tr>
                    </table>
                </div>
                <div class="col-md-5">
                    <!--회사정보와 관련한 내용-->
                    <p><span class="glyphicon glyphicon-home">부산광역시 해운대구 우동 마린빌딩 302호</p>
                    <p><span class="glyphicon glyphicon-earphone">010-6566-8843</span></p>
                    <p><span class="glyphicon glyphicon-envelope">egag8843@gmail.com</span></p>
                    <p><span class="glyphicon glyphicon-pencil">NINEstudio.com</span></p>
                </div>
                
            </div>
        </div>
        </div>
        <!-- contact 영역 끝-->
        
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
        <script>
            $(".carousel").carousel({
                interval:2000
            })

    function delete_account(){
    if(confirm("회원탈퇴를 하시겠습니까?")){
        location.href="delete_account.php";
    }
}
        </script>
</body>
</html>