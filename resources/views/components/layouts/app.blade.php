<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? Helper::setting('sitename') }}</title>
    <meta name="description" content="{{ $description ?? '' }}">
    <meta name="keywords" content="{{ $keywords ?? '' }}">

    <!-- Favicon -->
    <link rel="shortcut icon" href="/assets/imgs/favicon.ico">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Six+Caps&display=swap" rel="stylesheet">

    <!-- Plugins -->
    <link rel="stylesheet" href="/common/css/plugins.css">

    <!-- Core Style Css -->
    <link rel="stylesheet" href="/common/css/common_style.css">
    <link rel="stylesheet" href="/assets/css/home8-style.css">

    {!! Helper::setting('head_codes') !!}
</head>

<body>

    {!! Helper::setting('body_start_codes') !!}

    <!-- ==================== Start Loading ==================== -->
    <div class="loader-wrap">
        <svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
            <path id="svg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
        </svg>
        <div class="loader-wrap-heading">
            <div class="load-text">
                <span>S</span>
                <span>M</span>
                <span>A</span>
                <span>R</span>
                <span>T</span>
                <span>W</span>
                <span>E</span>
                <span>B</span>
            </div>
        </div>
    </div>
    <!-- ==================== End Loading ==================== -->

    <div class="cursor"></div>

    <!-- ==================== Start progress-scroll-button ==================== -->
    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- ==================== End progress-scroll-button ==================== -->

    <x-start-navbar></x-start-navbar>

    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main>
                <x-header-block></x-header-block>
                {{ $slot }}
            </main>
            <x-footer-block></x-footer-block>
        </div>
    </div>

    <!-- jQuery -->
    <script src="/common/js/lib/jquery-3.6.0.min.js"></script>
    <script src="/common/js/lib/jquery-migrate-3.4.0.min.js"></script>

    <!-- plugins -->
    <script src="/common/js/lib/plugins.js"></script>

    <!-- GSAP -->
    <script src="/common/js/gsap_lib/gsap.min.js"></script>
    <script src="/common/js/gsap_lib/ScrollSmoother.min.js"></script>
    <script src="/common/js/gsap_lib/ScrollTrigger.min.js"></script>
    <script src="/common/js/gsap_lib/SplitText.min.js"></script>

    <!-- common scripts -->
    <script src="/common/js/common_scripts.js"></script>

    <!-- custom scripts -->
    <script src="/assets/js/hscroll.js"></script>
    <script src="/assets/js/scripts.js"></script>

    {!! Helper::setting('body_end_codes') !!}

</body>

</html>
