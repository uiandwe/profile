@extends('layout.layout')
@section('css')
    <link type="text/css" rel="stylesheet" href="/css/main.css" />
    <link type="text/css" rel="stylesheet" href="/css/project.css" />
@endsection

@section('content')
    <div id="page-wrapper">

        <section id="two" class="wrapper alt style2">
            <section class="cd-scrolling-bg bg-default">
                <div class="title-wrapper">
                    <h3 class="h3 text-center">이것저것 포트폴리오</h3>
                </div>
                <div class="cd-gallery cd-section cd-container">

                    <div class="more-portfolio text-center">
                        <a href="/" class="btn btn-outline">홈으로</a>
                    </div>
                </div>
            </section> <!-- cd-gallery -->
        </section>
    </div>

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