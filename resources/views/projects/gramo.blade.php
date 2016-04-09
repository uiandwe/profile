@extends('layout.layout')
@section('css')
    <link type="text/css" rel="stylesheet" href="/css/main.css" />
    <link type="text/css" rel="stylesheet" href="/css/project.css" />
    <link type="text/css" rel="stylesheet" href="/css/gramo.css" />

@endsection

@section('content')


    <!-- Header -->
    <section id="header">
        <div class="inner">
            <h1><strong>Gramo</strong></h1>
            <div id="cd-intro-background" class="cd-intro-background">
                <img src="/portfolio-source/gramo/img_00.png" alt="">
            </div>
        </div>
    </section>

    <!-- One -->
    <section id="one" class="main style1">
        <div class="container">
            <div class="row 150%">
                <div class="6u 12u$(medium)">
                    <header class="major">
                        <h2>Gramo 그라모</h2>
                    </header>
                    <p>그라모는 그라모 앱 내에서 광고를 통해 앱을 다운 받거나, 비디오 광고를 시청완료하거나, 특정한 목표를 달성한 사용자에게, 각각의 약속된 포인트를 제공하는 서비스로 해당 서버를 개발하였습니다.<br>
                        서버는 python의 django로 개발되었으며 관리자가 원하는 광고를 등록 및 유저의 기본정보에 맞는 광고를 설정 및 제한할수 있습니다.<br>                광고의 경우 자체 등록광고 및 타사지원광고(trialpay, adpopcorn, tnk, fyber, linkprice)의 callback API를 통한 적립 로직 및  편의점(cu, 세븐일레븐, GS) 및 체인점(inumber)의 쿠폰 발급이 주 서비스 입니다.<br>
                        자체 광고API를 통한 적립과 안드로이드 푸쉬을 개발하였습니다.<br>
                        해당 프로젝트는 실제 사용가능한 쿠폰인 만큼 앱상의 보안을 중점적으로 개발하였습니다.</p>
                </div>
                <div class="6u$ 12u$(medium) important(medium)">
                    <span class="image fit"><img src="/portfolio-source/gramo/img_03.png" alt="" /></span>
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
                        <li><span class="icon style1 major "><img src="/portfolio-source/gramo/python.png" alt="" /> </span></li>
                        <li><span class="icon style1 major "><span>C3.js</span></span></li>
                        <li><span class="icon style1 major "><img src="/portfolio-source/gramo/fyber.png" alt="" /></span></li>
                        <li><span class="icon style1 major "><img src="/portfolio-source/gramo/adpopcorn.png" alt="" id="width150"/></span></li>

                    </ul>
                </div>
                <div class="6u$ 12u$(medium)">
                    <h3>1. 진행기간</h3>
                    <p>2014.08~2014.10</p>
                    <h3>2. 주요내용</h3>
                    <p>리워드앱(포인트 적립을 통한 쿠폰 사용)</p>
                    <h3>3. 본인이 공헌한 점 </h3>
                    <p>프론트 엔드(어드민 페이지 100%) + 백엔드 (100%)</p>
                    <h3>4. 사용한 Skill 또는 지식</h3>
                    <p> 프론트 엔드 : HTML/CSS/Bootstrap/Javascript/<br>
                        백엔드 : python + django + mysql</p>
                    <h3>5. 결과/성과 </h3>
                    <p> 현재 중국기업에 exit으로 인한 국내 활동 종료<br>
                        국내외 광고 연동(trialpay / adpopcorn / tnk / fyber / linkprice) 콜백 구현<br>
                        국내 쿠폰 발급(inumber) 연동<br>
                        자체 광고 서비스 구현및 콜배 구현(타 브라우저에서 콜백을 통한 적립가능)<br>
                        c3.js 커스텀을 통한 광고 수익 그래프 화면 개발
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
                <span class="image fit">
                    <div >
                        <img src="/portfolio-source/gramo/img_11.png"  alt="" />
                    </div>
                </span>
                    <h3>다양한 광고 콜백 구현</h3>
                    <p><br>동영상 / 앱 설치 / 참여형 등의 여러 광고 형태를 광고대행사의 콜백 및 쿠폰 콜백을 구현하였습니다.</p>
                </div>
                <div class="4u 12u$(medium)">
                <span class="image fit">
                    <div >
                        <img src="/portfolio-source/gramo/img_06.png" alt="" />
                    </div>
                </span>
                    <h3>사용자 편의에 따른 다양한<br> 쿠폰 구현</h3>
                    <p>편의점(cu, 세븐일레븐, GS) 및 체인점(inumber)에 속하는 가게의 쿠폰 발급이 가능하도록 개발되었습니다.</p>
                </div>
                <div class="4u$ 12u$(medium)">
                    <span class="image fit"><img src="/portfolio-source/gramo/img_09.png" alt="" /></span>
                    <h3>그래프를 통한 수익 변화를 <br>한눈에 파악 할수 있는 디자인</h3>
                    <p>광고 / 기간 / 분류별로 간단한 선택 만으로<br> 수익변화율을 한눈에 파악하여 수익 조정을 할수 있도록  라이블러리를 커스텀하여 그래프를 구현하였습니다.</p>
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