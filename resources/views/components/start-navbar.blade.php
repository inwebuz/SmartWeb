<div>
    <!-- ==================== Start Navbar ==================== -->

    <nav class="navbar navbar-expand-lg">
        <div class="container">

            <!-- Logo -->
            <a class="logo" href="{{ route('home') }}">
                <x-logo></x-logo>
            </a>

            <!-- navbar links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    @foreach (Helper::mainMenu() as $item)
                        <li class="nav-item">
                            <a class="nav-link {{ $item['active'] ? 'active' : '' }}" href="{{ $item['url'] }}">{{ $item['title'] }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="topnav d-flex align-items-center">
                <a href="{{ route('contacts') }}" class="butn butn-rounded">
                    <div class="d-flex align-items-center">
                        <span>Bizga yozing</span>
                        <span class="icon ml-10">
                            <img src="{{ asset('common/imgs/icons/arrow-top-right.svg') }}" alt="Right">
                        </span>
                    </div>
                </a>
                <div class="menu-icon cursor-pointer">
                    <span class="icon ti-align-right"></span>
                </div>
            </div>
        </div>
    </nav>

    <div class="hamenu">
        <div class="close-menu cursor-pointer ti-close"></div>
        <div class="container-fluid rest d-flex">
            <div class="menu-links">
                <ul class="main-menu rest">
                    @foreach (Helper::mainMenu() as $item)
                        <li>
                            <div class="o-hidden">
                                <a href="{{ $item['url'] }}" class="link cursor-pointer dmenu">
                                    <span class="fill-text" data-text="{{ $item['title'] }}">{{ $item['title'] }}</span>
                                </a>
                            </div>
                        </li>
                    @endforeach
                    {{-- <li>
                        <div class="o-hidden">
                            <div class="link cursor-pointer dmenu"><span class="fill-text" data-text="Blog">Blog</span>
                                <i></i></div>
                        </div>
                        <div class="sub-menu">
                            <ul>
                                <li>
                                    <a href="../inner_pages/blog-grid.html" class="sub-link">Blog Grid</a>
                                </li>
                                <li>
                                    <a href="../inner_pages/blog-standard.html" class="sub-link">Blog Standard</a>
                                </li>
                                <li>
                                    <a href="../inner_pages/blog-details.html" class="sub-link">Blog Details</a>
                                </li>
                            </ul>
                        </div>
                    </li> --}}
                </ul>
            </div>
            <div class="cont-info valign">
                <div class="text-center full-width">
                    <div class="logo">
                        <x-logo></x-logo>
                    </div>
                    <div class="social-icon mt-40">
                        @foreach (Helper::socialLinks() as $item)
                            <a href="{{ $item['url'] }}" rel="nofollow" target="_blank" title="{{ $item['title'] }}">
                                <i class="{{ $item['icon'] }}"></i>
                            </a>
                        @endforeach
                    </div>
                    {{-- <div class="item mt-30">
                        <h5>541 Melville Geek, <br> Palo Alto, CA 94301</h5>
                    </div> --}}
                    <div class="item mt-10">
                        <h5><a href="mailto:info@smartweb.uz">info@smartweb.uz</a></h5>
                        <h5 class="underline"><a href="tel:+998339010333">+998 33 901 03 33</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==================== End Navbar ==================== -->
</div>
