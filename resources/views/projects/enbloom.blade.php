@extends('layout.layout')
@section('css')
    <link type="text/css" rel="stylesheet" href="/css/main.css" />
    <link type="text/css" rel="stylesheet" href="/css/project.css" />
    <link type="text/css" rel="stylesheet" href="/css/enbloom.css" />

@endsection

@section('content')



    <!-- Header -->
    <section id="header">
        <div class="inner">
            <h1><strong id="h1strongBlack">Enbloom</strong></h1>
            <div id="cd-intro-background" class="cd-intro-background">
                <img src="/portfolio-source/enbloom/img_00.png" alt="">
            </div>
        </div>
    </section>

    <!-- One -->
    <section id="one" class="main style1">
        <div class="container">
            <div class="row 150%">
                <div class="col-md-6">
                    <header class="major">
                        <h2>Enbloom 인블룸</h2>
                    </header>
                    <p> 씸플한 디자인이 인상적인 인블룸은 커스터마이징 심볼 주얼리 브랜드 플랫폼입니다. <br>
                        사용자가 원하는 패턴의 2d를 생성하게 되면 해당하는 패턴을 통해 3d프린터를 통해 해당 결과물을 만들어내는 서비스입니. <br>
                        해당 서비스는 Front-end/Back-end 구현 및 three.js를 통한 2d 객체 생성 및 3d 프린터 파일을 생성하는 작업을 하였습니다. </p>
                    <p><a href="http://enbloom.net/">사이트로 이동</a></p>
                </div>
                <div class="col-md-offset-1 col-md-4">
                    <span class="image fit">
                        <img src="/portfolio-source/enbloom/img_04.gif" alt="" />
                    </span>
                </div>
            </div>
        </div>
    </section>

    <!-- Two -->
    <section id="two" class="main style2">
        <div class="container">
            <div class="row 150%">
                <div class="6u 12u$(medium)">
                    <ul class="major-icons">
                        <li><span class="icon style1 major fa-code"></span></li>
                        <li><span class="icon style1 major "><img src="/portfolio-source/enbloom/wordpress-logo.png" alt="" /> </span></li>
                        <li><span class="icon style1 major "><span>three.js</span></span></li>
                        <li><span class="icon style1 major "><span>ivank.js</span></span></li>
                    </ul>
                </div>
                <div class="6u$ 12u$(medium)">
                    <h3>1. 진행기간</h3>
                    <p>2015.08~2015.09</p>
                    <h3>2. 주요내용</h3>
                    <p>사용자가 원하는 패턴의 2d를 생성하게 되면 해당하는 패턴을 통해 3d프린터를 통해 해당 결과물을 만들어내는 서비스</p>
                    <h3>3. 본인이 공헌한 점 </h3>
                    <p>프론트 엔드 (2d제작 스크립트+3d 변환 스크립트), 백엔드 (100%)</p>
                    <h3>4. 사용한 Skill 또는 지식</h3>
                    <p> 프론트 엔드 : Javascript+ivank.js+three.js<br>
                        백엔드 : php+wordpress+mysql</p>
                    <h3>5. 결과/성과 </h3>
                    <p> 커스터마이징 심볼 주얼리 브랜드 플랫폼 서비스 구현 <br>
                        2d / 3d에 제작 이해 및 물리엔진 적용
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Three -->
    <section id="three" class="main style1 special">
        <div class="container">
            <header class="major">
                <h2>제작 과정</h2>
            </header>
            <p></p>
            <div class="row 150%">
                <div class="4u 12u$(medium)">
                    <span class="image fit"><img src="/portfolio-source/enbloom/img_01.jpg" class="height-315" alt="" /></span>
                    <h3>사용자 입력에 따른 <br> 이미지 그리기</h3>
                    <p>해당 서비스의 중점인 사용자가 입력한 번호에 맞게 해당 패턴을 그리는것을 구현했으며, 사용자가 원하는대로 움직이며 최접적을 찾아서 디자인을 매핑 및 배치하였습니다.</p>
                </div>
                <div class="4u 12u$(medium)">
                    <span class="image fit"><img src="/portfolio-source/enbloom/img_05.png" alt="" /></span>
                    <h3>보다 완벽하게 구현된 <br> 반응형 웹사이트</h3>
                    <p>미지 사이즈에 따른 정보의 왜곡을 줄이고자 반응형 웹 기술과 함께 이미지의 중앙에 포커스가 맞도록 로직을 구성하였습니다. 또한 간편 결제 시스템을 구축해 예약 및 결제가 편리하게 이루어집니다.</p>
                </div>
                <div class="4u$ 12u$(medium)">
                    <span class="image fit"><img src="/portfolio-source/enbloom/img_03.png" alt="" /></span>
                    <h3>3D 모델링</h3>
                    <p><br>사용자가 입력한 패턴을 정의된 크기에 따라 모델링을 통한 3D 출력 파일로 변환을 하였습니다.</p>
                </div>
            </div>
        </div>
    </section>


@endsection

@section('js')
    <!-- Scripts -->
    <script src="/js/jquery.scrollex.min.js"></script>
    <script src="/js/jquery.scrolly.min.js"></script>
    <script src="/js/skel.min.js"></script>
    <script src="/js/util.js"></script>
    <!--[if lte IE 8]><script src="/js/ie/respond.min.js"></script><![endif]-->
    <script src="/js/project.js"></script>
@endsection