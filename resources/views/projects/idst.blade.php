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
                <img src="/portfolio-source/idst/image_06.png" alt="">
            </div>
        </div>
    </section>

    <!-- One -->
    <section id="one" class="main style1">
        <div class="container">
            <div class="row 150%">
                <div class="6u 12u$(medium)">
                    <header class="major">
                        <h2>IDST</h2>
                    </header>
                    <p> 환자의 혈액 데이터를 통한 질병 통계 예측 서비스입니다. <br>
                        제공되는 환자의 샘플의 곡률면의 데이터를 기반으로 해당 곡률면과 가장 비슷한 점도를 찾아내어 질병의 데이터화 및 예측하는 서비스입니다.<br>
                        해당 프로젝트에서는 제공된 데이터와 비슷한 점도를 찾는 계산식을 구축하였으며, 해당 계산시 클러스터링 연산을 하도록 구축하였습니다. <br>
                        사용자가 볼수 있는 클라이언트단과 제공되는 엑셀/CSV/그래프 등의 다양한 화면 구성을 담당하였습니다.</p>
                    <p><a href="http://femtofab.slogup.com/">사이트로 이동</a></p>
                </div>
                <div class="6u$ 12u$(medium) important(medium)">
                    <span class="image fit"><img src="/portfolio-source/idst/image_05.png" alt="" /></span>
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
                    <p>2018.01 ~ 2018.04</p>
                    <h3>2. 주요내용</h3>
                    <p> 환자의 혈액 데이터를 통한 질병 통계 예측 서비스</p>
                    <h3>3. 본인이 공헌한 점 </h3>
                    <p>프론트 엔드 (100%), 백엔드 (100%)</p>
                    <h3>4. 사용한 Skill 또는 지식</h3>
                    <p> 프론트 엔드 : angularjs + scss <br>
                        백엔드 : node.js + mysql</p>
                    <h3>5. 결과/성과 </h3>
                    <p> 점도 계산 통계식 구축 및 클러스터링 연산 구축<br>
                        클라이언트단과 제공되는 엑셀/CSV/그래프 등의 다양한 화면 구성
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
                    <span class="image fit"><img src="/portfolio-source/idst/image_02.png"  alt="" /></span>
                    <h3>사용자 데이터에 의한 계산 <br>진행 (클러스터링)</h3>
                    <p>사용자가 환자의 데이터를 입력시 해당 데이터는 수십만의 좌표값으로 입력됩니다. 해당 데이터를 빠르게 처리하기 위해 로직을 처리할수 있는 서버를 등록하면, 각서버마다 분배하여 빠르게 계산을 완료하도록 클러스터링을 구축하였습니다.</p>
                </div>
                <div class="4u 12u$(medium)">
                    <span class="image fit"><img src="/portfolio-source/idst/image_03.png" alt="" /></span>
                    <h3>EXCEL/CSV/그래프화면 지원<br><br></h3>
                    <p>사용자가 다양한 형태로 데이터에 접근할수 있도록 EXCEL/CSV/그래프화면 지원 합니다.</p>
                </div>
                <div class="4u$ 12u$(medium)">
                    <span class="image fit"><img src="/portfolio-source/idst/image_04.png" alt="" /></span>
                    <h3>데이터에 의한 통계 <br>계산식 구축</h3>
                    <p>환자의 데이터를 입력시 설정된 서버로 각각의 데이터값을 계산 및 합산. 통계 데이터를 진행하게 됩니다. 해당 데이터들은 해찾기를 통해 최종의 가장 근접한 값을 찾아 사용자에게 제공됩니다.</p>
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