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
            {{--<h1><strong>쓱싹</strong></h1>--}}
            <div id="cd-intro-background" class="cd-intro-background">
                <img src="/portfolio-source/ims/image_04.png" alt="">
            </div>
        </div>
    </section>

    <!-- One -->
    <section id="one" class="main style1">
        <div class="container">
            <div class="row 150%">
                <div class="6u 12u$(medium)">
                    <header class="major">
                        <h2>IMS analytics</h2>
                    </header>
                    <p> Interactive Message Service Analytics 비즈데이터 개인화 분석 솔루션 <br>
                        대량발송 홍보 메시지의 효과분석을 위한 데이터 분석 솔루션입니다.<br>
                        IMS Analytics는 이런 맹점을 해결, 개개인 단위에서 누가 ·언제 ·어디서 메시지를 열어봤는지 데이터를 트랙킹할 수 있고, <br>
                        나아가 성별 ·나이 ·지역 ·열람횟수 등 세부정보까지 분석할 수 있습니다. <br>
                        현재 이랜드, 교보생명, 하이마트, 롯데슈퍼, 롯데마트, 한화생명 등 문자 대량발송 DB마케팅을 이용하는 시장의 메인 플레이어들이 IMS Analytics를 이용하고 있습니다.</p>
                        해당 프로젝트에서 발송 및 통계 화면인 클라이언트 전체와 문자 발송 시스템 연동 및 통계 api를 개발하였습니다.
                </div>
                <div class="6u$ 12u$(medium) important(medium)">
                    <span class="image fit"><img src="/portfolio-source/ims/image_03.png" alt="" /></span>
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
                    <p>2016.12 ~ 2017.03</p>
                    <h3>2. 주요내용</h3>
                    <p> 대량발송 홍보 메시지 데이터 분석 솔루션</p>
                    <h3>3. 본인이 공헌한 점 </h3>
                    <p>프론트 엔드 (100%), 백엔드 (50%)</p>
                    <h3>4. 사용한 Skill 또는 지식</h3>
                    <p> 프론트 엔드 : angularjs + scss <br>
                        백엔드 : node.js + mysql</p>
                    <h3>5. 결과/성과 </h3>
                    <p> 문자 발송 시스템 연동 및 통계 시스템 구축<br>
                        클라이언트 반응형 및 통계 데이터 그래프 표현
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
                    <span class="image fit"><img src="/portfolio-source/ims/image_06.png"  alt="" /></span>
                    <h3>보다 완벽하게 구현된 반응형 웹사이트</h3>
                    <p>발송 및 통계 데이터 화면까지 사용자가 어떠한 환경에서도 접근 가능하도록 반응형으로 제작하였습니다. </p>
                </div>
                <div class="4u 12u$(medium)">
                    <span class="image fit"><img src="/portfolio-source/ims/image_05.png" alt="" /></span>
                    <h3>메시지 발송 및 <br>CSV 다운로드</h3>
                    <p>작성된 MMS 혹은 LMS를 해당 사용자들에게 발송하거나 / CSV로 변환하여 다른 프로그램을 이용하여 발송하도록 개발하였습니다.</p>
                </div>
                <div class="4u$ 12u$(medium)">
                    <span class="image fit"><img src="/portfolio-source/ims/image_04.png" alt="" /></span>
                    <h3>사용자의 메시지 트래킹<br>통계 화면</h3>
                    <p>사용자들이 발송된 메시지에 접속, 사이트 접속시 해당 사용자에 대한 버튼 클릭에 대한 이벤티를 트래킹합니다. (버튼마다 이벤트를 추가하여 페이지를 만듭니다.)<br>
                    나이/성별/지역에 따른 통계를 통해 보다 효율적인 분석을 가능케 합니다.</p>
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