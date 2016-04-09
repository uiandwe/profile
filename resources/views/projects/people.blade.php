@extends('layout.layout')
@section('css')
    <link type="text/css" rel="stylesheet" href="/css/main.css" />
    <link type="text/css" rel="stylesheet" href="/css/project.css" />
    <link type="text/css" rel="stylesheet" href="/css/people.css" />

@endsection

@section('content')


    <!-- Header -->
    <section id="header">
        <div class="inner">
            <h1><strong id="h1strongBlack">People Fund</strong></h1>
            <div id="cd-intro-background" class="cd-intro-background">
                <img src="/portfolio-source/people/img_00.png" alt="">
            </div>
        </div>
    </section>

    <!-- One -->
    <section id="one" class="main style1">
        <div class="container">
            <div class="row 150%">
                <div class="6u 12u$(medium)">
                    <header class="major">
                        <h2>PeopleFund 피플펀드</h2>
                    </header>
                    <p>피플펀드는 P2P(Peer-to-Peer)대출 서비스로 개인의 신용도를 토대로 대출을 측정하는 서비스 입니다. 해당 서비스에서 개인 신용등급에 대한 데이터를 통한 그래프를 표현을 반응형으로 구현하였습니다.</p>
                    <p><a href="https://www.peoplefund.co.kr/">사이트로 이동</a></p>
                </div>
                <div class="6u$ 12u$(medium) important(medium)">
                    <span class="image fit"><img src="/portfolio-source/people/img_01.gif" alt="" /></span>
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
                        <li><span class="icon style2 major "><img src="/portfolio-source/people/html5.png" alt="" /> </span></li>
                        <li><span class="icon style3 major "><img src="/portfolio-source/people/css3.png" alt="" /></span></li>
                        <li><span class="icon style4 major "><img src="/portfolio-source/people/jquery.png" alt="" /></span></li>

                    </ul>
                </div>
                <div class="6u$ 12u$(medium)">
                    <h3>1. 진행기간</h3>
                    <p>2015.03</p>
                    <h3>2. 주요내용</h3>
                    <p>P2P(Peer-to-Peer)대출 서비스의 반응형 그래프 구현</p>
                    <h3>3. 본인이 공헌한 점 </h3>
                    <p>프론트 엔드 (10%)</p>
                    <h3>4. 사용한 Skill 또는 지식</h3>
                    <p> 프론트 엔드 : Javascript/jquery</p>
                    <h3>5. 결과/성과 </h3>
                    <p> 개인 신용등급에 대한 데이터를 통한 그래프를 표현을 반응형으로 구현
                    </p>

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