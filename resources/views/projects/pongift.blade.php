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

            <div id="cd-intro-background" class="cd-intro-background">
                <img src="/portfolio-source/pongift/image_06.jpg" alt="">
            </div>
        </div>
    </section>

    <!-- One -->
    <section id="one" class="main style1">
        <div class="container">
            <div class="row 150%">
                <div class="6u 12u$(medium)">
                    <header class="major">
                        <h2>Pongift</h2>
                    </header>
                    <p> 폰기프트는 기프티콘 서비스 플랫폼입니다. <br>
                        기프트 쿠폰 관련 서비스 인프라가 없는 업체들이 폰기프트를 통해서 고객들로 여금 모바일 기프트 쿠폰 서비스를 이용할 수 있도록 구현했습니다. <br>
                        약 200여개의 API로 이뤄진 대규모시스템이며, 추후 글로벌 확장을 위한 국제화 셋팅까지 적용되었습니다. <br>
                        해당 프로젝트에서 네이버 스토어팜 / 옥션 상품 판매 연동을 개발하였으며, MMS 발송시 제공되는  이미지를 만드는 컴퍼넌트를 개발하였습니다. (상품 + 바코드 이미지 실시간 생성)<br>
                        MMS 발송 서드파티 추가하였으며 어드민의 화면 및 성능 개선을 하였습니다.</p>
                    <p><a href="https://play.google.com/store/apps/details?id=com.platfos.pongift&hl=ko">사이트로 이동</a></p>
                </div>
                <div class="6u$ 12u$(medium) important(medium)">
                    <span class="image fit"><img src="/portfolio-source/pongift/image_06.jpg" alt="" /></span>
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
                    <p>2017.04 ~ 2017.10</p>
                    <h3>2. 주요내용</h3>
                    <p> 모바일 기프트 쿠폰 플랫폼 개발</p>
                    <h3>3. 본인이 공헌한 점 </h3>
                    <p> 프론트 엔드 (30%), 백엔드 (50%)</p>
                    <h3>4. 사용한 Skill 또는 지식</h3>
                    <p> 프론트 엔드 : angularjs + scss <br>
                        백엔드 : node.js + mysql</p>
                    <h3>5. 결과/성과 </h3>
                    <p> 네이버 스토어팜 / 옥션 상품 판매 연동, 이미지 가공 (상품 + 바코드 이미지 실시간 생성)<br>
                        MMS 발송 서드파티 추가 및 기타 화면 및 성능 개선
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
                    <span class="image fit"><img src="/portfolio-source/pongift/image_02.jpg"  alt="" /></span>
                    <h3>플랫디자인을 통한 세련된 레이아웃 디자인</h3>
                    <p>파일 변환을 주목적으로 하는 사이트의 활용에 맞게 심플하고 단순하게 디자인을 기획하였습니다.</p>
                </div>
                <div class="4u 12u$(medium)">
                    <span class="image fit"><img src="/portfolio-source/pongift/image_04.jpg" alt="" /></span>
                    <h3>기념일 관리</h3>
                    <p>사용자의 핸드폰에 저장된 기념일을 통해 해당 서비스의 활용을 극대화 하였습니다.</p>
                </div>
                <div class="4u$ 12u$(medium)">
                    <span class="image fit"><img src="/portfolio-source/pongift/image_07.png" alt="" /></span>
                    <h3>네이버 스토어팜 <br> 옥션 판매 연동</h3>
                    <p>대표 판매 플랫폼인 스토어팜/옥션의 판매 채널을 통해 단순히 sdk에서만의 판매가 아닌 타사 온라인 판매를 위해 상품을 등록/수정 할수 있는 서브파티 연동을 했습니다.</p>
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