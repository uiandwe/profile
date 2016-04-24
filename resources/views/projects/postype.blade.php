@extends('layout.layout')
@section('css')
    <link type="text/css" rel="stylesheet" href="/css/main.css" />
    <link type="text/css" rel="stylesheet" href="/css/project.css" />
@endsection

@section('content')

    <!-- Header -->
    <section id="header">
        <div class="inner">
            <h1><strong>POSTYPE</strong></h1>
            <div id="cd-intro-background" class="cd-intro-background">
                <img src="/portfolio-source/postype/image_04.png" alt="">
            </div>
        </div>
    </section>

    <!-- One -->
    <section id="one" class="main style1">
        <div class="container">
            <div class="row 150%">
                <div class="6u 12u$(medium)">
                    <header class="major">
                        <h2>POSTYPE 포스타입</h2>
                    </header>
                    <p>포스타입은 창작가들이 자신의 작품으로 수익 활동을 할 수 있는 1인 미디어 플랫폼입니다. 성능최적화 및 쿼리 튜닝, 알림시스템과 추천 시스템, 웹API 등 전반적인 백엔드단을 개발하였습니다.</p>
                    <p><a href="http://www.postype.com/">사이트로 이동</a></p>
                </div>
                <div class="6u$ 12u$(medium) important(medium)">
                    <span class="image fit"><img src="/portfolio-source/postype/image_04.png" alt="" /></span>
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
                        <li><span class="icon style2 major "><img src="/portfolio-source/laughingBeans/phalcon-php.png" alt="" /> </span></li>
                    </ul>
                </div>
                <div class="6u$ 12u$(medium)">
                    <h3>1. 진행기간</h3>
                    <p>2015.12~2016.03</p>
                    <h3>2. 주요내용</h3>
                    <p>창작가들이 자신의 작품으로 수익 활동을 할 수 있는 1인 미디어 플랫폼 구축</p>
                    <h3>3. 본인이 공헌한 점 </h3>
                    <p>프론트 엔드 (10%) + 백엔드 (40%)</p>
                    <h3>4. 사용한 Skill 또는 지식</h3>
                    <p> 프론트 엔드 : HTML/CSS/Bootstrap/Javascript <br>
                        백엔드 : php + phalcon + mariadb</p>
                    <h3>5. 결과/성과 </h3>
                    <p> 해당 서비스의 앱api  및 알림 서비스 개발<br>
                        추천 시스템 구축 및 개발 / 디비쿼리 튜닝 및 정규화 시행
                    </p>

                </div>
            </div>
        </div>
    </section>

    <!-- Three -->
    <section id="three" class="main style1 special">
        <div class="container">
            <header class="major">
                <h2>제작 과정 </h2>
            </header>
            <p></p>
            <div class="row 150%">
                <div class="col-sm-offset-1 col-sm-4">
                    <span class="image fit"><img src="/portfolio-source/postype/image_03.jpg" alt="" id="height700" /></span>
                    <h3>앱api 및 알림 서비스 개발</h3>
                    <p>기본 방응형이였던 웹사이트를 안드로이드 서비스를 위해 앱 api를 작성하였습니다. 또한 효과적인 뷰 리드를 위한 알림 서비스를 개발하였습니다.</p>
                </div>
                <div class="col-sm-offset-2 col-sm-4">
                    <span class="image fit"><img src="/portfolio-source/postype/image_05.png" alt="" id="height700" /></span>
                    <h3>추천 시스템 구축 및 개발</h3>
                    <p>자신이 구매/댓글/좋아요를 한 블로그/포스트에 따른 User based CF를 이용한 포스트를 추천해주는 시스템을 개발하였습니다.</p>
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