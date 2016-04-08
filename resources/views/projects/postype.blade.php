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
                        <li><span class="icon style1 major ">< /></span></li>
                        <li><span class="icon style2 major "><img src="/portfolio-source/travelingOwl/python.png" alt="" /> </span></li>
                        <li><span class="icon style3 major fa-mobile"></span></li>
                        <li><span class="icon style4 major "><img src="/portfolio-source/travelingOwl/Paypal_logo.png" alt="" /></span></li>
                    </ul>
                </div>
                <div class="6u$ 12u$(medium)">
                    <header class="major">
                        <h2>사용 기술</h2>
                    </header>
                    <p>Back-end는 php기반의 phalcon으로 개발되었습니다. php 프레임워크 중 가장 빠르면서 안정적이며 MVC 의 완전한 지원하기에 phalcon을 선택하였습니다. 또한 mariadb를 사용하여 디비에 대한 성능 및 효율성을 높히는데 주력하였습니다.</p>
                    <p>안드로이드 앱 전용 API를 개발하였습니다. 기존의 웹에서 비동기식 및 get방식의 모든 통신 요소를 json으로 리턴하게끔 작업하였습니다.  </p>
                    <p>해당 글 / 유저에 대한 이벤트가 발행하였을떄 (글 발행 / 좋아요 / 추천 / 구독 등) 알림 시스템을 웹 / 모바일에 맞게 개발하였습니다.  </p>
                    <p>유저가 늘어감에 따라 성능 부하에 따른 시스템 튜닝 작업을 진행하였습니다. 서버 이중화 및 전체 페이지 쿼리 튜닝 및 디비 최적화를 진행하였습니다. </p>
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
                    <span class="image fit"><img src="/portfolio-source/travelingOwl/image_10.png" class="height-315" alt="" /></span>
                    <h3>매거진처럼 보이는 세련된 레이아웃 디자인</h3>
                    <p>우리나라를 여행한 외국인들의 직접 찍은 사진과 리뷰를 자동적으로 배치하는 레이아웃 시스템을 구축하여, 세련된 매거진처럼 보이는 시각적 아름다움을 극대화했습니다.</p>
                </div>
                <div class="4u 12u$(medium)">
                    <span class="image fit"><img src="/portfolio-source/travelingOwl/image_13.png" alt="" /></span>
                    <h3>보다 완벽하게 구현된 반응형 웹사이트</h3>
                    <p>이미지 사이즈에 따른 정보의 왜곡을 줄이고자 반응형 웹 기술과 함께 이미지의 중앙에 포커스가 맞도록 로직을 구성하였습니다. 또한 paypal 연동을 통한 간편 결제 시스템을 구축해 예약 및 결제가 편리하게 이루어집니다.</p>
                </div>
                <div class="4u$ 12u$(medium)">
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