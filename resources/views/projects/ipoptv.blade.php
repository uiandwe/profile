@extends('layout.layout')
@section('css')
    <link type="text/css" rel="stylesheet" href="/css/main.css" />
    <link type="text/css" rel="stylesheet" href="/css/project.css" />
    <link type="text/css" rel="stylesheet" href="/css/ipoptv.css" />

@endsection

@section('content')




    <!-- Header -->
    <section id="header">
        <div class="inner">
            <h1><strong>Ipop Tv</strong></h1>
            <div id="cd-intro-background" class="cd-intro-background">
                <img src="/portfolio-source/ipoptv/top_main.png" alt="">
            </div>
        </div>
    </section>

    <!-- One -->
    <section id="one" class="main style1">
        <div class="container">
            <div class="row 150%">
                <div class="6u 12u$(medium)">
                    <header class="major">
                        <h2>Ipoptv 아이팝티비</h2>
                    </header>
                    <p>아이팝티비는 댄스 커뮤니티 사이트를 시작으로 단편영화, 음악, 축제 등 최신 문화 콘텐츠의 소식을 접할 수 있는 커뮤니티로 발전하고 있다. 지역별 최신 축제에 대한 정보를 확인 할 수 있으며, 단편영화, 댄스 배틀 등으로 구성된 편성표에 따라서 방송을 시청할 수 있다. XE를 기반으로 부트스트랩을 사용해 프론트엔드 작업과 백엔드 작업을 담당 1차 개발의 서브 2차개발의 메인을 맡아 개발을 진행했다.</p>
                    <p><a href="http://www.ipoptv.com/">사이트로 이동</a></p>
                </div>
                <div class="6u$ 12u$(medium) important(medium)">
                    <span class="image fit"><img src="/portfolio-source/ipoptv/img_01.png" alt="" /></span>
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
                        <li><span class="icon style2 major "><img src="/portfolio-source/ipoptv/xe.png" alt="" /> </span></li>
                        <li><span class="icon style3 major "><img src="/portfolio-source/ipoptv/owl.png" alt=""  style="margin-top: 30px;margin-bottom: -30px;margin-left: 10px;"/></span></li>
                        <li><span class="icon style4 major "><img src="/portfolio-source/ipoptv/video.png" alt="" /></span></li>

                    </ul>
                </div>
                <div class="6u$ 12u$(medium)">
                    <header class="major">
                        <h2>사용 기술</h2>
                    </header>
                    <p>Back-end는 php의 프레임워크중 xe를 선택하였습니다. 제공 되는 기본 템플릿 위에 각각의 화면에 맞는 플러그인을 개발함으로써 리스트/에디터의 커스텀 및 게시판에 맞는 기능만을 추가하여 좀더 효율적이며, 시간을 단축시키도록 개발되었습니다.</p>
                    <p>Front-end는 xe를 기본으로 bootstrap를 스타일을 입힘으로써 카드 형식의 그리드 형식의 디자인으로 각각의 동영상 및 사진 섹션에 집중하도록 지다인 되었습니다.</p>
                    <p>videojs를 활용하여 서버상의 동영상을 html5형식의 스트리밍으로 출력되도록 개발하였으며, owl carousel를 통하여 각각의 템플릿에서 효율적인 시각 효과를 추가하였습니다.</p>
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
                    <span class="image fit"><img src="/portfolio-source/ipoptv/img_05.png" class="height-315" alt="" /></span>
                    <h3>동영상 스트리밍 플레이 및  스케쥴 서비스 구축</h3>
                    <p>관리자가 미리 등록하여 각각의 시간대에 맞는 동영상을 스트리밍 할수 있도록 스케쥴표 및 비디오서비스를 구훅하였습니다.</p>
                </div>
                <div class="4u 12u$(medium)">
                    <span class="image fit"><img src="/portfolio-source/ipoptv/img_03.png" class="height-315" alt="" /></span>
                    <h3>크루생성을 통한 정보 공유<br></h3>
                    <p><br>자신과 맞는 크루 or 크루에 맞는 사용자를 검색하고 등록하여 사진/동영상 등 보다 넓은 정보 공유를 유도하도록 구축되었습니다.</p>
                </div>
                <div class="4u$ 12u$(medium)">
                    <span class="image fit"><img src="/portfolio-source/ipoptv/img_04.png" class="height-315" alt="" /></span>
                    <h3>콘텐츠로의 시선 흐름을 강조한<br> 그리드 레이아웃</h3>
                    <p>유저가 직관적으로 어떤 기능과 역할을 하는지 쉽게 인지할 수 있도록 메타포 그리드를 이용한 웹사이트를 구축했습니다. 카드 섹션 방신으로 각각의 칼럼을 보다 쉽게 구분할수 있도록 하였습니다.</p>
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