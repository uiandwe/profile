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
                        마케팅에 쓰이는 네이버 블로그 API연동 및 전송 로직 서버 클러스터링의 백엔드단을 개발하였습니다.</p>
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
                    <p> django를 이용한 웹서버 구축 및 sim파일 파싱을 통한 dfxp파일로 변환<br>
                        모듈별 한글 인코딩에 따른 예외 처리 습득 및 향후 변환한 자막들을 시리즈물로 묶어서 배포할 예정
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
                    <span class="image fit"><img src="/portfolio-source/dfxp/image_01.png"  alt="" /></span>
                    <h3>플랫디자인을 통한 세련된 레이아웃 디자인</h3>
                    <p>파일 변환을 주목적으로 하는 사이트의 활용에 맞게 심플하고 단순하게 디자인을 기획하였습니다.</p>
                </div>
                <div class="4u 12u$(medium)">
                    <span class="image fit"><img src="/portfolio-source/dfxp/image_02.png" alt="" /></span>
                    <h3>SIM파일 분석</h3>
                    <p>SIM파일 포멧은 우리나라에서만 사용하는 자막파일로써 dfxp파일로의 변환을 위해 구성 요소및 구조를 파악 후 작업으르 하였습니다.</p>
                </div>
                <div class="4u$ 12u$(medium)">
                    <span class="image fit"><img src="/portfolio-source/dfxp/image_03.png" alt="" /></span>
                    <h3>다양한 한글 포멧 지원</h3>
                    <p>한글의 경우 다양한 파일 포멧으로 되어 있습니다. (UTF-8 / ISO-8859-2 / cp949 등) 파일을 작성한 프로그램 / OS에 따라 한글 포멧이 달라지게 되는데 이를 모두 변환가능하도록 프로그램을 작성하였습니다.</p>
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