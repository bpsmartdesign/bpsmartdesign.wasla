{{-- Extends layout --}}
@extends('layout.website_default')

{{-- Content --}}
@section('content')

    <div class="slider-container rev_slider_wrapper" style="height: calc(100vh + 100px);">
        <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'sliderLayout': 'fullscreen', 'delay': 9000, 'gridwidth': 1140, 'gridheight': 900, 'responsiveLevels': [4096,1200,992,500], 'navigation' : {'arrows': { 'enable': true, 'style': 'arrows-style-2', 'left': {'h_align': 'center', 'v_align' : 'bottom', 'v_offset': 30, 'h_offset': 90}, 'right': {'h_align': 'center', 'v_align' : 'bottom', 'v_offset': 30, 'h_offset': 125}}, 'bullets': {'enable': false}}}">
            <ul>
                <li class="slide-overlay slide-overlay-primary slide-overlay-level-8" data-transition="fade">
                    <img src="{{ asset('website/media/img/home/header_bg.jpg') }}"
                        alt=""
                        data-bgposition="center center"
                        data-bgfit="cover"
                        data-bgrepeat="no-repeat"
                        class="rev-slidebg">

                    <div class="tp-caption font-weight-light text-center text-color-light"
                        data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                        data-x="center"
                        data-y="center" data-voffset="['-45','-45','-75','-85']"
                        data-fontsize="['22','22','40','55']"
                        data-lineheight="['29','29','29','40']">Lorem ipsum dolor <strong>36,000</strong> Sit amet consectum</div>

                    <h1 class="tp-caption font-weight-extra-bold text-color-light negative-ls-2"
                        data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                        data-x="center"
                        data-y="center"
                        data-fontsize="['55','55','90','95']"
                        data-lineheight="['55','55','90','95']">Welcome to WASLA chorale (Sing a song)</h1>

                    <a  class="tp-caption btn btn btn-dark font-weight-semibold text-color-light"
                        href="register"
                        data-frames='[{"delay":3500,"speed":2000,"frame":"0","from":"opacity:0;y:50%;","to":"o:1;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                        data-x="center"
                        data-y="center" data-voffset="['90','90','150','225']"
                        data-whitespace="nowrap"
                        data-fontsize="['12','12','25','30']"
                        data-paddingtop="['18','18','28','40']"
                        data-paddingright="['35','35','45','80']"
                        data-paddingbottom="['18','18','28','40']"
                        data-paddingleft="['35','35','45','80']"
                        data-lineheight="['20','20','20','22']">Register</a>

                    <a class="tp-caption btn btn-rounded-icon text-color-light"
                        style="display: inline-flex !important"
                        data-frames='[{"delay":500,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                        href="#main"
                        data-hash
                        data-hash-offset="150"
                        data-x="center"
                        data-y="bottom" data-voffset="['120','85','-150','-400']"
                        data-fontsize="['23','25','40','50']"><i class="icon-arrow-down icons"></i></a>

                    <div class="tp-caption"
                        style="left: -5px; background-color: #FFF"
                        data-frames='[{"delay":0,"from":"skY:-3deg;","to":"o:1","ease":"Power3.easeInOut"}]'
                        data-x="center"
                        data-y="bottom" data-voffset="-80"
                        data-height="['150']"
                        data-width="105%"
                        data-basealign="slide"></div>

                </li>
            </ul>
        </div>
    </div>

    <div class="container py-2 my-5" id="main">
        <div class="row text-center text-md-left mt-4">
            <div class="col-md-4 mb-4 mb-md-0 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400">
                <div class="row text-center justify-content-center">
                    <div class="col-4">
                        <img class="img-fluid mb-4" src="{{ asset('website/media/img/icon/privacy.png') }}" alt="">
                    </div>
                </div>
                <div class="row text-center justify-content-center">
                    <div class="col-lg-10">
                        <h2 class="font-weight-bold text-5 line-height-5 mb-2">Lorem Ipsum dolor</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque eos facilis sequi mollitia temporibus, architecto reprehenderit neque optio voluptates praesentium beatae expedita amet ipsam cum consequatur enim numquam nemo quibusdam!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 mb-md-0 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="200">
                <div class="row text-center justify-content-center">
                    <div class="col-4">
                        <img class="img-fluid mb-4" src="{{ asset('website/media/img/icon/delivery.png') }}" alt="">
                    </div>
                </div>
                <div class="row text-center justify-content-center">
                    <div class="col-lg-10">
                        <h2 class="font-weight-bold text-5 line-height-5 mb-2">Lorem Ipsum dolor</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque eos facilis sequi mollitia temporibus, architecto reprehenderit neque optio voluptates praesentium beatae expedita amet ipsam cum consequatur enim numquam nemo quibusdam!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                <div class="row text-center justify-content-center">
                    <div class="col-4">
                        <img class="img-fluid mb-4" src="{{ asset('website/media/img/icon/money_back.png') }}" alt="">
                    </div>
                </div>
                <div class="row text-center justify-content-center">
                    <div class="col-lg-10">
                        <h2 class="font-weight-bold text-5 line-height-5 mb-2">Lorem Ipsum dolor</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque eos facilis sequi mollitia temporibus, architecto reprehenderit neque optio voluptates praesentium beatae expedita amet ipsam cum consequatur enim numquam nemo quibusdam!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr class="solid my-5">

    <div class="container">
        <div class="row align-items-center text-center text-md-left pt-4 pb-5 my-5">
            <div class="col-lg-7 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">
                <h2 class="font-weight-bold text-6 line-height-1 ls-0 mb-4">Wasla chorale is about</h2>
                <p class="text-4">cing danish bear claw pastry marzipan. Marzipan gummi bears sweet toffee brownie. Liquorice fruitcake caramels. Jelly beans pudding halvah chupa chups candy brownie powder pastry.</p>
                <p class="mb-4 pr-md-5">Dessert cake pastry marzipan marshmallow. Dragée dessert jelly halvah toffee dragée sesame snaps cheesecake bear claw. Sugar plum gingerbread cupcake sugar plum cheesecake chocolate cake powder caramels apple pie. Sweet roll croissant marshmallow pastry danish candy. Brownie lollipop cotton candy dragée marshmallow carrot cake tootsie roll sweet. Candy chocolate bar caramels cupcake croissant pastry cake. Powder candy wafer jelly.</p>
                <a href="#" class="btn btn-dark font-weight-semibold rounded-0 text-2 btn-px-5 btn-py-2">LEARN MORE</a>
            </div>
            <div class="col-lg-5 text-center appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="700">
                <div class="row justify-content-center">
                    <div class="col-9 col-md-4 px-0 mb-4 mb-md-0">
                        <img class="img-fluid hover-effect-3" src="{{ asset('website/media/img/logos/logo-1.png') }}" alt="">
                    </div>
                    <div class="col-9 col-md-4 px-0 mb-4 mb-md-0">
                        <img class="img-fluid hover-effect-3" src="{{ asset('website/media/img/logos/logo-4.png') }}" alt="">
                    </div>
                    <div class="col-9 col-md-4 px-0 mb-4 mb-md-0">
                        <img class="img-fluid hover-effect-3" src="{{ asset('website/media/img/logos/logo-3.png') }}" alt="">
                    </div>
                </div>
                <div class="row justify-content-center py-md-3 my-md-4">
                    <div class="col-9 col-md-4 px-0 mb-4 mb-md-0">
                        <img class="img-fluid hover-effect-3" src="{{ asset('website/media/img/logos/logo-5.png') }}" alt="">
                    </div>
                    <div class="col-9 col-md-4 px-0 mb-4 mb-md-0">
                        <img class="img-fluid hover-effect-3" src="{{ asset('website/media/img/logos/logo-6.png') }}" alt="">
                    </div>
                    <div class="col-9 col-md-4 px-0 mb-4 mb-md-0">
                        <img class="img-fluid hover-effect-3" src="{{ asset('website/media/img/logos/logo-7.png') }}" alt="">
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-9 col-md-4 px-0">
                        <img class="img-fluid hover-effect-3" src="{{ asset('website/media/img/logos/logo-2.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="parallax section section-text-light section-parallax section-angled section-angled-reverse overlay overlay-show overlay-op-8 my-0" data-plugin-parallax data-plugin-options="{'speed': 2.5}"data-image-src="{{ asset('website/media/img/home/bg_2.jpg') }}">
        <div class="section-angled-layer-top bg-light"></div>
        <div class="section-angled-layer-bottom bg-color-grey-scale-1"></div>
        <div class="section-angled-content">
            <div class="container my-5 py-5">
                <div class="row pt-5 mt-4 pb-4">
                    <div class="col">
                        <div class="row pb-4 pt-2 clearfix">
                            <div class="col-lg-4">
                                <div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400">
                                    <div class="feature-box-icon">
                                        <i class="icon-user-following icons text-color-primary"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="mb-2">Lorem ipsum</h4>
                                        <p class="mb-4 text-default">Muffin chupa chups jelly-o chocolate cake powder croissant. Gummies croissant marzipan marzipan pudding fruitcake wafer brownie fruitcake. Apple pie jelly fruitcake lollipop. Apple pie cotton candy cupcake gingerbread marzipan toffee lemon drops. Sweet roll fruitcake pie carrot cake danish pudding lemon drops pastry gummi bears. Sweet dragée candy marshmallow apple pie donut lemon drops jelly sugar plum.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
                                    <div class="feature-box-icon">
                                        <i class="icon-screen-tablet icons text-color-primary"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="mb-2">Lorem ipsum</h4>
                                        <p class="mb-4 text-default">Muffin chupa chups jelly-o chocolate cake powder croissant. Gummies croissant marzipan marzipan pudding fruitcake wafer brownie fruitcake. Apple pie jelly fruitcake lollipop. Apple pie cotton candy cupcake gingerbread marzipan toffee lemon drops. Sweet roll fruitcake pie carrot cake danish pudding lemon drops pastry gummi bears. Sweet dragée candy marshmallow apple pie donut lemon drops jelly sugar plum.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInLeftShorter">
                                    <div class="feature-box-icon">
                                        <i class="icon-layers icons text-color-primary"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="mb-2">Lorem ipsum</h4>
                                        <p class="mb-4 text-default">Muffin chupa chups jelly-o chocolate cake powder croissant. Gummies croissant marzipan marzipan pudding fruitcake wafer brownie fruitcake. Apple pie jelly fruitcake lollipop. Apple pie cotton candy cupcake gingerbread marzipan toffee lemon drops. Sweet roll fruitcake pie carrot cake danish pudding lemon drops pastry gummi bears. Sweet dragée candy marshmallow apple pie donut lemon drops jelly sugar plum.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-height-4 bg-color-grey-scale-1 m-0 border-0">
        <div class="container container-lg">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-6 pr-lg-4">
                    <div class="row text-right justify-content-end">
                        <div class="col-lg-7 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="600">
                            <h4 class="text-3 text-color-primary font-weight-bold mb-0 mt-5">MORE ABOUT US</h4>
                            <p class="text-7 line-height-5 letter-spacing-minus-1 text-color-dark font-weight-bold mb-5">Get in touch with us and let us help you, we can make your project come true</p>
                        </div>
                        <div class="col-lg-8">
                            <img src="{{ asset('website/media/img/home/two.png') }}" class="img-fluid position-relative appear-animation mb-2" data-appear-animation="expandIn" data-appear-animation-delay="600" alt="" />
                        </div>
                    </div>
                </div>
                <div class="col-md-6 pl-lg-4">
                    <div class="row">
                        <div class="col-lg-8">
                            <img src="{{ asset('website/media/img/home/one.jpg') }}" class="img-fluid position-relative appear-animation mb-2" data-appear-animation="expandIn" data-appear-animation-delay="600" alt="" />
                        </div>
                        <div class="col-lg-9 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">
                            <h4 class="text-3 text-color-primary font-weight-bold mb-2 mt-5">BUILDING A NEW WORLD</h4>
                            <p class="text-4 line-height-9">Freeing people from a repressive society to live and earn wherever they choose. We want to help those that have  been let down by their government and allow them to start afresh.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

