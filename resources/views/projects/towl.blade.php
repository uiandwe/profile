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
            <h1><strong>Traveling Owl</strong></h1>
            <div id="cd-intro-background" class="cd-intro-background">
                <img src="/portfolio-source/travelingOwl/image_02.jpg" alt="">
            </div>
        </div>
    </section>

    <!-- One -->
    <section id="one" class="main style1">
        <div class="container">
            <div class="row 150%">
                <div class="6u 12u$(medium)">
                    <header class="major">
                        <h2>Traveling Owl 트래블링 아울</h2>
                    </header>
                    <p>트래블링 아울은 여행을 좋아하는 외국인들이 한국에 대한 정보를 더 쉽고 간편하게 접근할 수 있도록 돕는 서비스입니다. 사용자들이 직접 찍은 아름다운 사진과 리뷰를 한눈에 볼 수 있도록 레이아웃 스타일을 강화한 정보를 제공하며, 마크업 및 서버, 스케쥴, Google Map, 페이팔 결제 모듈을 포함한 전체 개발을 진행하였습니다.</p>
                    <p><a href="http://www.travelingowl.com/">사이트로 이동</a></p>
                </div>
                <div class="6u$ 12u$(medium) important(medium)">
                    <span class="image fit"><img src="/portfolio-source/travelingOwl/image_03.gif" alt="" /></span>
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
                        <li><span class="icon style3 major fa-mobile"></span></li>
                        <li><span class="icon style4 major "><img src="/portfolio-source/travelingOwl/Paypal_logo.png" alt="" /></span></li>
                        <li><span class="icon style6 major fa-calendar"></span></li>
                        <li><span class="icon style5 major "><img src="/portfolio-source/travelingOwl/google_map.png" alt="" /></span></li>
                    </ul>
                </div>
                <div class="6u$ 12u$(medium)">
                    <h3>1. 진행기간</h3>
                    <p>2014.10~2014.12</p>
                    <h3>2. 주요내용</h3>
                    <p>외국인을 위한 한국 관광 서비스 플랫폼(외국인을 위한 마이리얼트립)</p>
                    <h3>3. 본인이 공헌한 점 </h3>
                    <p>프론트 엔드(50%) + 백엔드 (100%)</p>
                    <h3>4. 사용한 Skill 또는 지식</h3>
                    <p> 프론트 엔드 : HTML/CSS/Bootstrap/Javascript/<br>
                        백엔드 : python + django + mysql</p>
                    <h3>5. 결과/성과 </h3>
                    <p> 각각의 사진 이미지들은 사용자 화면 사이즈에 최적화 되도록 이미지 자동 조정 스크립트를 작성<br>
                        결제시스템(paypal) 연동 및 googlemap api를 이용한 지도 서비스 구현<br>
                        스케쥴 서비스 구현
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