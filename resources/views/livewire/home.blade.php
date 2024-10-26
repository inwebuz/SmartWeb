<div>
    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/css/home8-style.css') }}">
    @endpush

    @push('scripts')
        <script src="{{ asset('assets/js/hscroll.js') }}"></script>
        <script src="{{ asset('assets/js/scripts.js') }}"></script>
    @endpush

    <!-- ==================== Start Header ==================== -->
    <header class="header-cst">
        <div class="container-fluid">
            <div class="row sm-marg">
                <div class="col-lg-6">
                    <div class="fit-img img">
                        <img src="assets/imgs/header/1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="fit-img img md-hide">
                        <img src="assets/imgs/header/2.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="caption text-center">
                <h1 class="title-font">Creative Studio</h1>
                <h4 class="mt-30 fw-300">
                    Zamonaviy va tezkor saytlar yaratish
                </h4>
            </div>
        </div>
    </header>
    <!-- ==================== End Header ==================== -->

    <!-- ==================== Start Portfolio ==================== -->
    <section class="work-card section-padding">
        <div class="container-xxl">
            <div class="cards">
                <div class="card-item">
                    <div class="img fit-img">
                        <img src="assets/imgs/works/1.jpg" alt="">
                        <div class="tags">
                            <a href="#0">Development</a>
                            <a href="#0">UI/UX</a>
                            <a href="#0">illustration</a>
                        </div>
                        <h5 class="bottom">
                            <a href="../inner_pages/project-details.html">Unerio Residential</a>
                        </h5>
                    </div>
                </div>
                <div class="card-item">
                    <div class="img fit-img">
                        <img src="assets/imgs/works/2.jpg" alt="">
                        <div class="tags">
                            <a href="#0">Mobile Responsive</a>
                            <a href="#0">UX Design</a>
                        </div>
                        <h5>
                            <a href="../inner_pages/project-details.html">Archin Studio</a>
                        </h5>
                    </div>
                </div>
                <div class="card-item">
                    <div class="img fit-img">
                        <img src="assets/imgs/works/3.jpg" alt="">
                        <div class="tags">
                            <a href="#0">UI/UX</a>
                            <a href="#0">Webflow</a>
                        </div>
                        <h5>
                            <a href="../inner_pages/project-details.html">Jorger Clarkson</a>
                        </h5>
                    </div>
                </div>
                <div class="card-item">
                    <div class="img fit-img">
                        <img src="assets/imgs/works/4.jpg" alt="">
                        <div class="tags">
                            <a href="#0">Development</a>
                            <a href="#0">UI/UX</a>
                            <a href="#0">illustration</a>
                        </div>
                        <h5 class="bottom left">
                            <a href="../inner_pages/project-details.html">DS Freelance</a>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="text-center mt-80">
                <a href="../inner_pages/portfolio-cards.html" class="butn butn-md butn-bord butn-rounded">
                    <div class="d-flex align-items-center">
                        <span>Check Our Portfolio</span>
                        <span class="icon invert ml-10">
                            <img src="../common/imgs/icons/arrow-top-right.svg" alt="">
                        </span>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <!-- ==================== End Portfolio ==================== -->

    <!-- ==================== Start Intro ==================== -->
    <section class="intro-cst section-padding pt-0">
        <div class="container">
            <div class="sec-head mb-80 pb-30 bord-thin-bottom-light">
                <div class="d-flex align-items-center">
                    <h6 class="fz-40 text-u ls2 title-font">↳ Biz haqimizda</h6>
                    <div class="ml-auto">
                        <a href="{{ route('contacts') }}" class="butn butn-md butn-bord butn-rounded">
                            <div class="d-flex align-items-center">
                                <span>Aloqa</span>
                                <span class="icon invert ml-10">
                                    <img src="{{ asset('common/imgs/icons/arrow-top-right.svg') }}" alt="">
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col-lg-9">
                    <div class="text mb-80 wow fadeInUp slow" data-wow-delay="0.2s">
                        <h5>Bizning jamoa mijozlar uchun qulay, sifatli va samarali yechimlar yaratadi, biznesingizning o‘sishi va rivojlanishi yo‘lida hamkorlik qilamiz</h5>
                    </div>
                    <div class="states">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="item sm-mb30 wow fadeInUp slow" data-wow-delay="0.2s">
                                    <span>Tajriba</span>
                                    <div class="d-flex align-items-end">
                                        <h2 class="title-font">09</h2>
                                        <span class="spn-botm">yil</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="item sm-mb30 wow fadeInUp slow" data-wow-delay="0.4s">
                                    <span>Mijozlar</span>
                                    <div class="d-flex align-items-end">
                                        <h2 class="title-font">100</h2>
                                        <span class="spn-botm">+</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="item wow fadeInUp slow" data-wow-delay="0.6s">
                                    <span>Loyihalar</span>
                                    <div class="d-flex align-items-end">
                                        <h2 class="title-font">150</h2>
                                        <span class="spn-botm">+</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================== End Intro ==================== -->

    <!-- ==================== Start services ==================== -->
    <section class="services-cst">
        <div class="container-fluid">
            <div class="light-bg section-padding radius-30">
                <div class="container">
                    <div class="sec-head mb-80 pb-30 bord-thin-bottom">
                        <div class="d-flex align-items-center">
                            <h6 class="fz-40 text-u ls2 title-font">↳ Bizning xizmatlar</h6>
                            <div class="ml-auto">
                                <a href="{{ route('services') }}" class="butn butn-md butn-bord butn-rounded">
                                    <div class="d-flex align-items-center">
                                        <span>Batafsil</span>
                                        <span class="icon ml-10">
                                            <img src="{{ asset('common/imgs/icons/arrow-top-right.svg') }}" alt="">
                                        </span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item d-flex align-items-end justify-content-between">
                        <div class="numb">
                            <h6>01.</h6>
                        </div>
                        <div class="title js-splittext-lines">
                            <h2>Sayt yaratish</h2>
                            <div class="list">
                                <span>Landing</span>
                                <span>Vizitka</span>
                                <span>Korporativ sayt</span>
                                <span>Onlayn magazin</span>
                            </div>
                        </div>
                        <div class="ml-auto">
                            <div class="text-right">
                                <div class="icon">
                                    <img src="{{ asset('common/imgs/icons/crown-solid.svg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item d-flex align-items-end justify-content-between">
                        <div class="numb">
                            <h6>02.</h6>
                        </div>
                        <div class="title">
                            <h2>Telegram Bot yaratish</h2>
                            <div class="list">
                                <span>Tayyor botlar</span>
                                <span>Unikal botlar</span>
                            </div>
                        </div>
                        <div class="ml-auto">
                            <div class="text-right">
                                <div class="icon">
                                    <img src="{{ asset('common/imgs/icons/bezier-curve-solid.svg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================== End services ==================== -->

    <!-- ==================== Start Team ==================== -->
    {{-- <section class="team-cst section-padding">
        <div class="container">
            <div class="sec-head pb-30 bord-thin-bottom-light">
                <div class="d-flex align-items-center">
                    <h6 class="fz-40 text-u ls2 title-font">↳ Our Team</h6>
                    <div class="ml-auto">
                        <a href="../inner_pages/team.html" class="butn butn-md butn-bord butn-rounded">
                            <div class="d-flex align-items-center">
                                <span>See All</span>
                                <span class="icon invert ml-10">
                                    <img src="../common/imgs/icons/arrow-top-right.svg" alt="">
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="thecontainer">

            <div class="panel">
                <div class="item">
                    <div class="img">
                        <img src="assets/imgs/team/avatar1.jpg" alt="">
                    </div>
                    <div class="cont d-flex align-items-end">
                        <div>
                            <h5>Brian Hanley</h5>
                        </div>
                        <div class="ml-auto">
                            <span>CEO Founder</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel">
                <div class="item">
                    <div class="img">
                        <img src="assets/imgs/team/avatar2.jpg" alt="">
                    </div>
                    <div class="cont d-flex align-items-end">
                        <div>
                            <h5>Brian Hanley</h5>
                        </div>
                        <div class="ml-auto">
                            <span>CEO Founder</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel">
                <div class="item">
                    <div class="img">
                        <img src="assets/imgs/team/avatar3.jpg" alt="">
                    </div>
                    <div class="cont d-flex align-items-end">
                        <div>
                            <h5>Brian Hanley</h5>
                        </div>
                        <div class="ml-auto">
                            <span>CEO Founder</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel">
                <div class="item">
                    <div class="img">
                        <img src="assets/imgs/team/avatar4.jpg" alt="">
                    </div>
                    <div class="cont d-flex align-items-end">
                        <div>
                            <h5>Brian Hanley</h5>
                        </div>
                        <div class="ml-auto">
                            <span>CEO Founder</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel">
                <div class="item">
                    <div class="img">
                        <img src="assets/imgs/team/avatar1.jpg" alt="">
                    </div>
                    <div class="cont d-flex align-items-end">
                        <div>
                            <h5>Brian Hanley</h5>
                        </div>
                        <div class="ml-auto">
                            <span>CEO Founder</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- ==================== End Team ==================== -->

    <!-- ==================== Start dark box ==================== -->
    <section class="container-fluid">
        <div class="section-padding sub-bg radius-30">
            <!-- ==================== Start Testimonials ==================== -->
            {{-- <div class="testimonials-ds">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="qoute-icon md-mb50">
                                <div class="text">
                                    <img src="assets/imgs/testim/Vector_Cricle_Text.svg" alt="">
                                </div>
                                <div class="icon">
                                    <img src="assets/imgs/testim/vector_quote.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="swiper testim-swiper swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="item">
                                            <div class="text">
                                                <h4>“Hubfolio studio ability to create a high quality UI is
                                                    stands out. It’s something we placed a premium on. A studio
                                                    with passionate, professional, fun and full creativity.
                                                    Recommend!.”</h4>
                                            </div>
                                            <div class="info d-flex align-items-center mt-40 pt-30 bord-thin-top-light">
                                                <div>
                                                    <div class="img-author">
                                                        <img src="assets/imgs/testim/avatar1.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="info-text">
                                                    <span>Bradley Gordon</span>
                                                    <p>CEO & Founder, Archin Studio</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="item">
                                            <div class="text">
                                                <h4>“Hubfolio studio ability to create a high quality UI is
                                                    stands out. It’s something we placed a premium on. A studio
                                                    with passionate, professional, fun and full creativity.
                                                    Recommend!.”</h4>
                                            </div>
                                            <div class="info d-flex align-items-center mt-40 pt-30 bord-thin-top-light">
                                                <div>
                                                    <div class="img-author">
                                                        <img src="assets/imgs/testim/avatar2.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="info-text">
                                                    <span>Bradley Gordon</span>
                                                    <p>CEO & Founder, Archin Studio</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="item">
                                            <div class="text">
                                                <h4>“Hubfolio studio ability to create a high quality UI is
                                                    stands out. It’s something we placed a premium on. A studio
                                                    with passionate, professional, fun and full creativity.
                                                    Recommend!.”</h4>
                                            </div>
                                            <div class="info d-flex align-items-center mt-40 pt-30 bord-thin-top-light">
                                                <div>
                                                    <div class="img-author">
                                                        <img src="assets/imgs/testim/avatar3.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="info-text">
                                                    <span>Bradley Gordon</span>
                                                    <p>CEO & Founder, Archin Studio</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- ==================== End Testimonials ==================== -->

            <!-- ==================== Start clients ==================== -->
            <div class="clients-ds mt-100">
                <div class="container">
                    <div class="sec-head mb-80">
                        <h6 class="fz-40 text-u ls2 title-font">↳ Texnologiyalar</h6>
                    </div>
                    <div class="row sm-marg gap-30">
                        @php
                            $technologies = ['php', 'js', 'html', 'css', 'nodejs', 'laravel', 'react', 'nextjs', 'composer', 'npm', 'mysql', 'mariadb', 'postgresql', 'sqlite', 'github', 'gitlab', 'bitbucket', 'figma', 'photoshop', 'typescript', 'tailwind', 'bootstrap'];
                        @endphp
                        @foreach ($technologies as $technology)
                            <div class="col-lg-3 col-md-4 col-6 py-2">
                                <div class="item d-flex align-items-center justify-content-center">
                                    <div class="img">
                                        <img src="{{ asset('assets/imgs/technologies/' . $technology . '.svg') }}" alt="{{ $technology }}">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- ==================== End clients ==================== -->
        </div>
    </section>
    <!-- ==================== End dark box ==================== -->
</div>
