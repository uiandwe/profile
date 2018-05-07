@extends('layout.layout')
@section('css')
<link type="text/css" rel="stylesheet" href="/css/main.css" />
<link type="text/css" rel="stylesheet" href="/css/project.css" />
<link type="text/css" rel="stylesheet" href="/css/laughingbeans.css" />

@endsection

@section('content')


    <!-- Header -->
    <section id="header">
        <button type="button" id="back" class="sg-button sg-back icon fa-arrow-circle-o-left"></button>
        <div class="inner">
            <h1><strong id="h1strongBlack">Laughing Beans</strong></h1>
            <div id="cd-intro-background" class="cd-intro-background">
                <img src="/portfolio-source/laughingBeans/img_01.jpg" alt="">
            </div>
        </div>
    </section>

    <!-- One -->
    <section id="one" class="main style1">
        <div class="container">
            <div class="row 150%">
                <div class="6u 12u$(medium)">
                    <header class="major">
                        <h2>Laughing Beans 래핑빈즈</h2>
                    </header>
                    <p>플랫 디자인이 인상적인 래핑빈즈는 외국어와 모국어 지식을 서로 교환하여 외국어를 재미있게 공부할 수 있는 플랫폼입니다. <br>유튜브에 있는 영화나 드라마 콘텐츠를 통해 모국어를 가르쳐 주면 포인트를 얻고 사용함으로써 내가 배우고 싶은 외국어를 배울 수 있습니다. <br>해당 서비스는 Front-end/Back-end 구현 및 youtube api를 통한 동영상 재생및 제어, TTS를 이용한 텍스트 읽기를 구현하였습니다. </p>
<!--                    <p><a href="http://www.laughingbeans.com/">사이트로 이동</a></p>-->
                </div>
                <div class="6u$ 12u$(medium) important(medium)">
                    <span class="image fit"><img src="/portfolio-source/laughingBeans/img_00.png" alt="" /></span>
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
                        <li><span class="icon style3 major "><img src="/portfolio-source/laughingBeans/mashape_logo.png" alt="" /></span></li>
                        <li><span class="icon style4 major "><img src="/portfolio-source/laughingBeans/youtube_logo.png" alt="" /></span></li>
                    </ul>
                </div>
                <div class="6u$ 12u$(medium)">
                    <h3>1. 진행기간</h3>
                    <p>2015.01 ~ 2015.02(1차 개발) / 2015.06 ~ 2015.08(2차 개발)</p>
                    <h3>2. 주요내용</h3>
                    <p>외국어와 모국어 지식을 서로 교환하여 배우는 외국어 어학 사이트 개발</p>
                    <h3>3. 본인이 공헌한 점 </h3>
                    <p>프론트 엔드 (어드민 페이지 100%), 백엔드 (50%)</p>
                    <h3>4. 사용한 Skill 또는 지식</h3>
                    <p> 프론트 엔드 : HTML/CSS/Bootstrap/Javascript/youtube-api/mashape(TTS)<br>
                        백엔드 : php + phalcon + mysql</p>
                    <h3>5. 결과/성과 </h3>
                    <p> youtube 구간 설정 및 반복 구현 및 사용자가 입력한 텍스트에 대한 TTS callback 구현<br>
                        자신의 모국어를 통해 번역을 하면 다시 다른 언어와 매칭되어 새로운 언어로 문제를 만들어내는 매칭시스템을 구현<br>
                        어학 학습 페이지 구현 (시험 제출 및 정답 확인)
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
                    <span class="image fit"><img src="/portfolio-source/laughingBeans/img_09.png" class="height-315" alt="" /></span>
                    <h3>콘텐츠로의 시선 흐름을 강조한<br> 그리드 레이아웃</h3>
                    <p>사용자가 각각의 콘텐츠를 한눈에 인식할 수 있도록 그리드 레이아웃의 카드 스타일을 적용하여 디자인했으며, 네비게이션부터 카테고리 등 웹사이트 내 흐름이 자연스럽게 이루어지도록 모든 요소를 적재적소에 배치하였습니다.</p>
                </div>
                <div class="4u 12u$(medium)">
                    <span class="image fit"><img src="/portfolio-source/laughingBeans/img_11.png" alt="" /></span>
                    <h3>영상 구문 학습과 테스트를<br> 중점으로 둔 개발 프로세스</h3>
                    <p>유튜브에서 제공하는 API(응용 프로그램 프로그래밍 인터페이스)를 통하여 해당 구문을 공유할 수 있도록, 그리고 원하는 컨텐츠의 구문을 선택해 자신의 실력을 검증할 수 있는 테스트를 중점으로 개발했습니다.</p>
                </div>
                <div class="4u$ 12u$(medium)">
                    <span class="image fit"><img src="/portfolio-source/laughingBeans/img_03.png" alt="" /></span>
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