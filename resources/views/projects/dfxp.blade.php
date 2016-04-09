@extends('layout.layout')
@section('css')
    <link type="text/css" rel="stylesheet" href="/css/main.css" />
    <link type="text/css" rel="stylesheet" href="/css/project.css" />
@endsection

@section('content')

    <!-- Header -->
    <section id="header">
        <div class="inner">
            <h1><strong>DFXP</strong></h1>
            <div id="cd-intro-background" class="cd-intro-background">
                <img src="/portfolio-source/dfxp/image_00.png" alt="">
            </div>
        </div>
    </section>

    <!-- One -->
    <section id="one" class="main style1">
        <div class="container">
            <div class="row 150%">
                <div class="6u 12u$(medium)">
                    <header class="major">
                        <h2>SMI TO DFXP</h2>
                    </header>
                    <p>DFXP는 웹동영상 자막의 확장자입니다. 웹에서 구동되는 웹들은 기본적으로 *.dfxp 형태의 포멧의 자막을 지원합니다. 현재 넷플릭스는 dfxp를 지원중이며 우리나라에서 가장 많이 사용하는 sim 파일을 dfxp 파일로 변환하기 위한 사이트 입니다. </p>

                    <p><a href="http://dfxp.geeekdev.com">사이트로 이동</a></p>
                </div>
                <div class="6u$ 12u$(medium) important(medium)">
                    <span class="image fit"><img src="/portfolio-source/dfxp/image_00.png" alt="" /></span>
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
                        <li><span class="icon style2 major "><img src="/portfolio-source/travelingOwl/python.png" alt="" /> </span></li>
                        <li><span class="icon style3 major "><span>pycaption</span></span></li>
                    </ul>
                </div>
                <div class="6u$ 12u$(medium)">
                    <h3>1. 진행기간</h3>
                    <p>2015.12</p>
                    <h3>2. 주요내용</h3>
                    <p>자막파일 sim파일을 웹용 자막파일인 dfxp로 변환해 주는 사이트 </p>
                    <h3>3. 본인이 공헌한 점 </h3>
                    <p>프론트 엔드 (100%), 백엔드 (100%)</p>
                    <h3>4. 사용한 Skill 또는 지식</h3>
                    <p> 프론트 엔드 : HTML/CSS/Bootstrap/Javascript <br>
                        백엔드 : python + django + mysql</p>
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