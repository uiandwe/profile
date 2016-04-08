@extends('layout.layout')
@section('css')
    <link type="text/css" rel="stylesheet" href="/css/main.css" />
    <link type="text/css" rel="stylesheet" href="/css/project.css" />
@endsection

@section('content')

    <!-- Header -->
    <section id="header">
        <div class="inner">
            <h1><strong>HOWMANY</strong></h1>
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
                        <li><span class="icon style4 major "><img src="/portfolio-source/howmany/casper-logo.png" alt="" /></span></li>
                        <li><span class="icon style5 major "><img src="/portfolio-source/travelingOwl/google_map.png" alt="" /></span></li>
                    </ul>
                </div>
                <div class="6u$ 12u$(medium)">
                    <header class="major">
                        <h2>사용 기술</h2>
                    </header>
                    <p>Back-end는 node.js기반의 express로 개발되었습니다. 스크립트 프레임워크중 가장 빠른 express로 구성되었습니다.</p>
                    <p>데이터 수집은 phantom.js 기반의 handless webkit 기반인 casperjs로 map데이터를 수집하였습니다. 해당 데이터들은 api로 지원되지 않는 데이터들로써 모두 웹페에지를 크롤링하여 데이터를 수집하였습니다.</p>
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