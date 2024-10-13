<!-- ==================== Start Footer ==================== -->
<footer class="footer-sa pb-80">
    <div class="container section-padding">
        <div class="call-action text-center mb-80">
            <h2 class="title-font">
                <a href="{{ route('contacts') }}">Biz bilan bog'laning</a>
            </h2>
        </div>
        <div class="contact-info">
            <div class="row">
                <div class="col-lg-5">
                    <a href="{{ route('home') }}" class="logo md-mb80">
                        <x-logo></x-logo>
                    </a>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="item">
                                <span class="sub-color">Telefon</span>
                                <div>
                                    <a href="tel:{{ Helper::setting('phone') }}">{{ Helper::setting('phone') }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex justify-content-end justify-end">
                            <div class="item">
                                <span class="sub-color">E-mail</span>
                                <div>
                                    <a href="mailto:{{ Helper::setting('email') }}">{{ Helper::setting('email') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-5">
                    <div class="social-icon">
                        @foreach (Helper::socialLinks() as $item)
                            <a href="{{ $item['url'] }}" rel="nofollow" target="_blank" title="{{ $item['title'] }}">
                                <i class="{{ $item['icon'] }}"></i>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sub-footer">
        <div class="container bord-thin-top-light pt-50">
            <div class="row">
                <div class="col-lg-8">
                    <div class="copy sub-color md-mb50">
                        <p>© {{ date('Y') }} <a href="{{ route('home') }}">SMARTWEB</a>. Barcha huquqlar himoyalangan</p>
                    </div>
                </div>
                <div class="col-lg-4 d-flex justify-content-end">
                    <div class="links sub-color d-flex justify-content-between">
                        @foreach (Helper::mainMenu() as $item)
                            <a href="{{ $item['url'] }}" class="{{ $item['active'] ? 'active' : '' }}">{{ $item['title'] }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ==================== End Footer ==================== -->
