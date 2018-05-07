@extends('layout.layout')
@section('css')
    <link type="text/css" rel="stylesheet" href="/css/main.css" />
    <link type="text/css" rel="stylesheet" href="/css/project.css" />
@endsection

@section('content')

    <!-- Header -->
    <section id="header">
        <button type="button" id="back" class="sg-button sg-back icon fa-arrow-circle-o-left"></button>
        <div class="inner">
            <h1><strong id="h1strongBlack">HOWMANY</strong></h1>
            <div id="cd-intro-background" class="cd-intro-background">
                <img src="/portfolio-source/howmany/image_01.png" alt="">
            </div>
        </div>
    </section>

    <!-- One -->
    <section id="one" class="main style1">
        <div class="container">
            <div class="row 150%">
                <div class="6u 12u$(medium)">
                    <header class="major">
                        <h2>HOWMANY</h2>
                    </header>
                    <p>HOWMANY는 지도데이터 분석을 통해 특정 데이터의 갯수를 수집하여 제공하는 사이트 입니다. 현재 교회/ 편의점 / 치킨 / 카페 등 11개 데이터에 대한 데이터를 수집 및 표기 중입니다. 매년 한번 등록 / 갱신 되며 해당 데이터는 네이버 맵을 기초로 수집하고 있습니다.</p>
                    <p><a href="http://howmany.geeekdev.com/">사이트로 이동</a></p>
                </div>
                <div class="6u$ 12u$(medium) important(medium)">
                    <span class="image fit"><img src="/portfolio-source/howmany/image_01.png" alt="" /></span>
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
                        <li><span class="icon style2 major "><img src="/portfolio-source/howmany/nodejs-logo.png" alt="" /> </span></li>
                        <li><span class="icon style4 major "><img src="/portfolio-source/howmany/casper-logo.png" alt="" id="width70"/></span></li>
                        <li><span class="icon style5 major "><img src="/portfolio-source/travelingOwl/google_map.png" alt="" /></span></li>
                    </ul>
                </div>
                <div class="6u$ 12u$(medium)">
                    <h3>1. 진행기간</h3>
                    <p>2014.02~ (매년 데이터 갱신중)</p>
                    <h3>2. 주요내용</h3>
                    <p>우리 주변의 상가의 갯수를 알기 위한 사이트.<br>
                        포털사이트의 맵 데이터를 수집하여 원하는 데이터를 수집 및 데이터 분석. (네이버(2014, 2015)/네이트(2014) 맵 데이터 수집)</p>
                    <h3>3. 본인이 공헌한 점 </h3>
                    <p>프론트 엔드 (100%), 백엔드 (100%)</p>
                    <h3>4. 사용한 Skill 또는 지식</h3>
                    <p> 프론트 엔드 : HTML/CSS/Bootstrap/Javascript<br>
                        백엔드 : PHP + laravel + Mysql + node.js + casperjs</p>
                    <h3>5. 결과/성과 </h3>
                    <p> node.js를 이용한 웹서버 구축 및 headless WebKit인 casperjs를 이용한 지도 사이트 파싱 및 데이터 수집<br>
                        node.js 프레임워크 습득 및 비동기 웹사이트에 대한 파싱 습득 및 수집 데이터에서의 예외처리 / 오류 데이터 제거 후 데이터 제공
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
                <div class="col-sm-offset-1 col-sm-4">
                    <span class="image fit"><img src="/portfolio-source/howmany/image_03.png" class="height-315" alt="" /></span>
                    <h3>매거진처럼 보이는 세련된 레이아웃 디자인</h3>
                    <p>우리나라를 여행한 외국인들의 직접 찍은 사진과 리뷰를 자동적으로 배치하는 레이아웃 시스템을 구축하여, 세련된 매거진처럼 보이는 시각적 아름다움을 극대화했습니다.</p>
                </div>
                <div class="col-sm-offset-1 col-sm-4">
                    <span class="image fit"><img src="/portfolio-source/travelingOwl/image_11.png" alt="" /></span>
                    <h3>메타포 그리드를 이용한 체계적인 웹사이트 구성</h3>
                    <p>유저가 직관적으로 어떤 기능과 역할을 하는지 쉽게 인지할 수 있도록 메타포 그리드를 이용한 웹사이트를 구축했습니다. 히어로와 본문 사이에 카테고리 바를 추가하여 쉬운 검색을 도왔습니다.</p>
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