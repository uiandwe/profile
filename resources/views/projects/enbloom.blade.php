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
                    <h3>콘텐츠로의 시선 흐름을 강조한<br> 그리드 레이아웃</h3>
                    <p>사용자가 각각의 콘텐츠를 한눈에 인식할 수 있도록 그리드 레이아웃의 카드 스타일을 적용하여 디자인했으며, 네비게이션부터 카테고리 등 웹사이트 내 흐름이 자연스럽게 이루어지도록 모든 요소를 적재적소에 배치하였습니다.</p>
                </div>
                <div class="4u 12u$(medium)">
                    <span class="image fit"><img src="/portfolio-source/enbloom/img_05.png" alt="" /></span>
                    <h3>영상 구문 학습과 테스트를<br> 중점으로 둔 개발 프로세스</h3>
                    <p>유튜브에서 제공하는 API(응용 프로그램 프로그래밍 인터페이스)를 통하여 해당 구문을 공유할 수 있도록, 그리고 원하는 컨텐츠의 구문을 선택해 자신의 실력을 검증할 수 있는 테스트를 중점으로 개발했습니다.</p>
                </div>
                <div class="4u$ 12u$(medium)">
                    <span class="image fit"><img src="/portfolio-source/enbloom/img_03.png" alt="" /></span>
                    <h3>배우기 그리고 가르치기</h3>
                    <p><br>사용자는 랩핑빈에서 제공하는 구문학습을 통해 언어를 배워나갑니다. 또한 배운 언어를 자신의 모국어로 번역함으로써 해당 번역문구는 다른 언어와 함께 문제가 만들어지도록 개발되었습니다.</p>
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