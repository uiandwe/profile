@extends('layout.layout')
@section('css')
    <link type="text/css" rel="stylesheet" href="/css/main.css" />
    <link type="text/css" rel="stylesheet" href="/css/project.css" />
@endsection

@section('content')

    <!-- Header -->
    <section id="header">
        <div class="inner">
            {{--<h1><strong>쓱싹</strong></h1>--}}
            <div id="cd-intro-background" class="cd-intro-background">
                <img src="/portfolio-source/sgsg/image_01.png" alt="">
            </div>
        </div>
    </section>

    <!-- One -->
    <section id="one" class="main style1">
        <div class="container">
            <div class="row 150%">
                <div class="6u 12u$(medium)">
                    <header class="major">
                        <h2>쓱싹</h2>
                    </header>
                    <p> 에어컨 / 보일러 / 도어락 / 벽걸이 Tv 설치 온라인 견적 서비스 입니다. <br>
                        집에 설치해야하는 여러 생활 필수품들을 사고, 해당 지역의 설치기사님과 직접 연결해주는 O2O 서비스입니다.<br>
                        어드민 화면 및 통계 화면,  설치 신청 및 제품 구매 페이지 ( 세틀뱅크 결제 연동 ), 기사 신청 하이브리드 앱 등의 프론트엔드 단과 <br>
                        마케팅에 쓰이는 네이버 블로그 API연동과 함께 전송 로직 서버 클러스터링의 백엔드단을 개발하였습니다.</p>
                    <p><a href="http://sgsg.slogup.com/">사이트로 이동</a></p>
                </div>
                <div class="6u$ 12u$(medium) important(medium)">
                    <span class="image fit"><img src="/portfolio-source/sgsg/image_02.png" alt="" /></span>
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
                        <li><span class="icon style2 major "><img src="/portfolio-source/ims/nodejslogo.png" alt="" /> </span></li>
                        <li><span class="icon style2 major "><img src="/portfolio-source/ims/angular.png" alt="" /> </span></li>
                    </ul>
                </div>
                <div class="6u$ 12u$(medium)">
                    <h3>1. 진행기간</h3>
                    <p>2017.12 ~ </p>
                    <h3>2. 주요내용</h3>
                    <p> 에어컨 / 보일러 / 도어락 / 벽걸이 Tv 설치 온라인 견적 O2O 서비스</p>
                    <h3>3. 본인이 공헌한 점 </h3>
                    <p>프론트 엔드 (50%), 백엔드 (20%)</p>
                    <h3>4. 사용한 Skill 또는 지식</h3>
                    <p> 프론트 엔드 : angularjs + scss <br>
                        백엔드 : node.js + mysql</p>
                    <h3>5. 결과/성과 </h3>
                    <p> 어드민 화면 및 통계 화면,  설치 신청 및 제품 구매 페이지 ( 세틀뱅크 결제 연동 )<br>
                        세틀뱅크 결제 연동 및 기사 신청 하이브리드 앱 등의 프론트엔드 <br>
                        네이버 블로그 API연동 및 전송 로직 서버 클러스터링의 백엔드
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
                    <span class="image fit"><img src="/portfolio-source/sgsg/image_03.jpg"  alt="" /></span>
                    <h3>보다 완벽하게 구현된 <br>반응형 웹사이트</h3>
                    <p>상품 판매에 있어서 가장 중요한 모든 기기와 브라우져에서 작동하도록 반응형에 최적화 하였습니다.</p>
                </div>
                <div class="4u 12u$(medium)">
                    <span class="image fit"><img src="/portfolio-source/sgsg/image_06.png" alt="" /></span>
                    <h3>하이브리드앱을 통한 <br>빠른 배포 및 개발</h3>
                    <p>앱 개발 및 배포를 단축시키기 위해 하이브리드앱으로 개발하였습니다. 디자인은 모바일 가이드라인을 따르며 액션은 앱과의 브맂지를 통해 성능을 향상시켰습니다.</p>
                </div>
                <div class="4u$ 12u$(medium)">
                    <span class="image fit"><img src="/portfolio-source/sgsg/image_07.png" alt="" /></span>
                    <h3>마케팅 지원을 위한 블로그 <br>api 발송</h3>
                    <p>네이버 블로그 api를 통해서 마케팅을 지원하였습니다. 대량 글쓰기를 통하면 빠른 처리를 위해 10개의 서버에서 작업을 진행합니다.</p>
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