@extends('layout.layout')
@section('css')
    <link type="text/css" rel="stylesheet" href="/css/main.css" />
    <link type="text/css" rel="stylesheet" href="/font-face/entypo.css" />
@endsection

@section('content')

        <!--[if lte IE 8]><script src="/js/ie/html5shiv.js"></script><![endif]-->

        <div id="page-wrapper">

            <section id="banner">
                <div class="inner">
                    <h2>현승재</h2>
                    <p>
                        소프트웨어 엔지니어...
                    </p>
                    <img class="user-avatar" src="/images/profile.png" alt="user profile image">
                </div>
                <a href="#one" class="more scrolly">Learn More</a>
            </section>

            <!-- One -->
            <section id="one" class="wrapper style1 special">
                <div class="inner">
                    <header class="major">
                        <h2>ABOUT</h2>
                        <p> 필드에서 개발자로 일하면서 제게 필요한, 그리고 재미있는 컨셉의 서비스를 개발하는것을 좋아합니다. <br>
                            주로 개발되는 서비스의 환경은 web 기반의 front-end, back-end를 총괄할 수 있습니다. <br>
                            IT관련 블로그를 운영하며, opensource에도 참여중입니다. <br>
                            No Warning, No Error를 통하여 Warning없이 작성하여 Error가 없는 프로그램을 만드는것을 목표로 합니다.<br>
                            앞으로도 재미있고 더욱 필요한 서비스들을 계속해서 만들어나갈 생각입니다.</p>
                    </header>
                    <ul class="icons major">
                        <li><span class="icon fa-rocket major style1"><span class="label">Lorem</span></span></li>
                        <li><span class="icon fa-subscript major style2"><span class="label">Ipsum</span></span></li>
                        <li><span class="icon fa-code major style3"><span class="label">Dolor</span></span></li>
                    </ul>
                </div>
            </section>

            <section id="two" class="wrapper style3 special">
                <div class="inner">
                    <header class="major">
                        <h2>Use Skill</h2>

                    </header>
                    <ul class="features">
                        <li class="icon fa-file-code-o">
                            <h3>Front-end</h3>
                            <p>HTML<br>
                                CSS+Bootstrap<br>
                                script+jquery
                            </p>
                        </li>
                        <li class="icon fa-laptop">
                            <h3>Bank-end</h3>
                            <p>linux+ubuntu, windows+window server<br>
                                java+spring+ibatis<br>
                                python+django/Flask<br>
                                php+phalcon/XE/Wordpress/CI/laravel<br>
                                nodejs+express+socketIO<br>
                            </p>
                        </li>

                        <li class="icon fa-sitemap">
                            <h3>Data Bases</h3>
                            <p>mysql<br>
                                oracle<br>
                                mongodb<br>
                                RDB tuning / MapReduce
                            </p>
                        </li>
                        <li class="icon fa-line-chart">
                            <h3>Etc.</h3>
                            <p>Math+Graph+2D/3D<br>
                                Machine Learning/Artificial Neural Network<br>
                                c/c++/ncs/winapi/MFC/boost<br>
                            </p>
                        </li>

                    </ul>
                </div>
            </section>

        <section id="three" class="wrapper alt style2">
            <section class="cd-scrolling-bg bg-default">
                <div class="title-wrapper">
                    <h3 class="h3 text-center">주요 포트폴리오</h3>
                </div>
                <div class="cd-gallery cd-section cd-container">
                    <ul class="grid cs-style-3 clearfix">
                        <li>
                            <figure>
                                <a href="/project/postype/">
                                    <img src="/images/postype_thumb.png" alt="list_thumb">
                                    <figcaption>
                                        <h3>POSTYPE</h3>
                                        <em>콘텐츠를 사고팔 수 있는 블로그 플랫폼</em>
                                        <span class="entypo chevron-right"></span>
                                    </figcaption>
                                </a>
                            </figure>
                        </li>

                        <li>
                            <figure>
                                <a href="/project/dfxp/">
                                    <img src="/images/dfxp_thumb.png" alt="list_thumb">
                                    <figcaption>
                                        <h3>SMI TO DFXP</h3>
                                        <em>웹전용 자막 변환 사이트</em>
                                        <span class="entypo chevron-right"></span>
                                    </figcaption>
                                </a>
                            </figure>
                        </li>

                        <li>
                            <figure>
                                <a href="/project/howmany/">
                                    <img src="/images/howmany.png" alt="list_thumb">
                                    <figcaption>
                                        <h3>HOWMANY</h3>
                                        <em>지도 분석 사이트</em>
                                        <span class="entypo chevron-right"></span>
                                    </figcaption>
                                </a>
                            </figure>
                        </li>


                        <li>
                            <figure>
                                <a href="/project/towl/">
                                    <img src="/images/towl_thumb.png" alt="list_thumb">
                                    <figcaption>
                                        <h3>Traveling Owl</h3>
                                        <em>전문적인 정보와 함께 외국인의 여행을 돕는 서비스</em>
                                        <span class="entypo chevron-right"></span>
                                    </figcaption>
                                </a>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <a href="/project/laughingbeans/">
                                    <img src="/images/laughingbeans_thumb.jpg" alt="list_thumb">
                                    <figcaption>
                                        <h3>Laughing Beans</h3>
                                        <em>외국어와 모국어 서로 교환하여 공부하 플랫폼</em>
                                        <span class="entypo chevron-right"></span>
                                    </figcaption>
                                </a>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <a href="/project/enbloom/">
                                    <img src="/images/enbloom_thumb.png" alt="list_thumb">
                                    <figcaption>
                                        <h3>Enbloom</h3>
                                        <em>고유한 정보로 하나뿐인 심볼을 디자인하는 서비스</em>
                                        <span class="entypo chevron-right"></span>
                                    </figcaption>
                                </a>
                            </figure>
                        </li>

                        <li>
                            <figure>
                                <a href="/project/ipoptv/">
                                    <img src="/images/ipoptv_thumb.png" alt="list_thumb">
                                    <figcaption>
                                        <h3>Ipop tv</h3>
                                        <em>전문적인 정보와 함께 외국인의 여행을 돕는 서비스</em>
                                        <span class="entypo chevron-right"></span>
                                    </figcaption>
                                </a>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <a href="/project/gramo/">
                                    <img src="/images/gramo_thumb.png" alt="list_thumb">
                                    <figcaption>
                                        <h3>Gramo</h3>
                                        <em>광고 적립금을 통한 현금쿠폰 서비스</em>
                                        <span class="entypo chevron-right"></span>
                                    </figcaption>
                                </a>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <a href="/project/people/">
                                    <img src="/images/people_thumb.png" alt="list_thumb">
                                    <figcaption>
                                        <h3>People Fund</h3>
                                        <em> P2P(Peer-to-Peer)대출 서비스</em>
                                        <span class="entypo chevron-right"></span>
                                    </figcaption>
                                </a>
                            </figure>
                        </li>
                        <li>
                            <figure class="etc">
                                <a href="/pdf/포트폴리오_현승재_2014.pdf">
                                    <img src="/images/profile.png" alt="list_thumb">
                                    <figcaption>
                                        <h3>2014 이전 포트폴리오 </h3>
                                        <em> etc</em>
                                        <span class="entypo chevron-right"></span>
                                    </figcaption>
                                </a>
                            </figure>
                        </li>
                    </ul>

                </div>
            </section> <!-- cd-gallery -->
        </section>

        <footer>
            <h3>CONTACT ME</h3>
            <ul class="icons">
                <li><a href="https://github.com/uiandwe" class="icon fa-github"><span class="label">Github</span></a></li>
                <li><a href="mailto:uiandwe@gmail.com" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
            </ul>

        </footer>

    </div>

@endsection

@section('js')
    <!-- Scripts -->
    <script src="/js/jquery.scrollex.min.js"></script>
    <script src="/js/jquery.scrolly.min.js"></script>
    <script src="/js/skel.min.js"></script>
    <script src="/js/util.js"></script>
    <!--[if lte IE 8]><script src="/js/ie/respond.min.js"></script><![endif]-->
    <script src="/js/main.js"></script>
@endsection