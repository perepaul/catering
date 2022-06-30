<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta
         http-equiv="x-ua-compatible"
         content="ie=edge"
        >
        <meta
         name="description"
         content=""
        >
        <meta
         name="viewport"
         content="width=device-width, initial-scale=1"
        >

        <title>{{ config('app.name') }}</title>
        @php
        $favicon = asset($setting?->favicon ?? 'assets/img/favicon.png');
        @endphp
        <link
         rel="shortcut icon"
         type="image/x-icon"
         href="{{$favicon}}"
        >

        <!-- css include -->
        <link
         rel="stylesheet"
         href="assets/css/bootstrap.min.css"
        >
        <link
         rel="stylesheet"
         href="assets/css/themify-icons.css"
        >
        <link
         rel="stylesheet"
         href="assets/css/animate.min.css"
        >
        <link
         rel="stylesheet"
         href="assets/css/owl.carousel.min.css"
        >
        <link
         rel="stylesheet"
         href="assets/css/magnific-popup.css"
        >
        <link
         rel="stylesheet"
         href="assets/css/metisMenu.css"
        >
        <link
         rel="stylesheet"
         href="assets/css/jquery-ui.css"
        >
        <link
         rel="stylesheet"
         href="assets/css/nice-select.css"
        >
        <link
         rel="stylesheet"
         href="assets/css/datepicker.css"
        >
        <link
         rel="stylesheet"
         href="assets/css/jquery.timepicker.css"
        >
        <link
         rel="stylesheet"
         href="assets/css/style.css"
        >
        <link
         rel="stylesheet"
         href="assets/css/common.css"
        >
        <link
         rel="stylesheet"
         href="assets/css/responsive.css"
        >
        <link
         rel="stylesheet"
         href="assets/css/fontawesome.css"
        >
        <link
         rel="stylesheet"
         href="assets/css/fontawesome.min.css"
        >
        <link
         rel="stylesheet"
         href="assets/css/divider.css"
        >
        <link
         rel="stylesheet"
         href="assets/css/text-animation.css"
        >
        {{-- <link rel="stylesheet" href="assets/css/image-animation.html"> --}}


        <!-- Magnific Popup core CSS file -->
        <link
         rel="stylesheet"
         href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        >
    </head>



    <body onLoad="masonryClick()">
        <!-- body wrap start -->
        <div class="body_wrap">

            <!-- backtotop - start -->
            <div id="thetop"></div>
            <div id="backtotop">
                <a
                 href="#"
                 id="scroll"
                >
                    <i class="fa fa-arrow-up theme_primary"></i>
                    <i class="fa fa-arrow-up theme_primary"></i>
                </a>
            </div>
            <!-- backtotop - end -->

            <!-- start Preloader  -->
            <div class="preloder_part">
                <div class="spinner">
                    <div class="dot1"></div>
                    <div class="dot2"></div>
                </div>
            </div>
            <!-- End Preloader  -->

            <!-- header start -->
            <header
             class="header_area header_3 transparent_header"
             dir="LTR"
            >
                <div
                 id="sticky-header"
                 class="header_wrap header_space"
                >
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-lg-2 col-6">
                                <div class="logo">
                                    <a href="{{url('/')}}">
                                        <img
                                         src="{{ asset($setting?->logo ?? 'assets/img/logo/logo.png') }}"
                                         alt="logo"
                                        >
                                        <img
                                            src="{{asset($setting?->logo ?? 'assets/img/logo/logo.png')}}"
                                            alt=""
                                        />
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-7 d-none d-lg-block">
                                <div class="main_menu_wrap navbar navbar-expand-lg">
                                    <nav class="main_menu collapse navbar-collapse">
                                        <ul class="main_menu_list ul_li">
                                            <li><a
                                                 class="nav-link"
                                                 href="#about"
                                                >About</a> </li>
                                            <li><a
                                                 class="nav-link"
                                                 href="#gallery"
                                                >Gallery</a> </li>
                                            <li><a
                                                 class="nav-link"
                                                 href="#reviews"
                                                >Reviews</a> </li>
                                            <li><a
                                                 class="nav-link"
                                                 href="#catering_services"
                                                >Pricing & Plans</a> </li>
                                            <li><a
                                                 class="nav-link"
                                                 href="#contact"
                                                >Contact</a> </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>

                            <div class="col-lg-3 col-6">
                                <div class="header_right ul_li_right">
                                    <div class="header_carts ul_li">
                                        <div class="hamburger_menu">
                                            <a
                                             href="javascript:void(0);"
                                             class="active"
                                            >
                                                <div class="icon bar d-lg-none">
                                                    <span><i class="fa fa-bars"></i></span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="ul_li">
                                            <a
                                             class="icon cart_wishlist"
                                             @isset($setting?->email) href="mailto:{{ $setting?->email }}" @endisset>
                                                <i class="fa fa-envelope"></i>
                                            </a>
                                            <a
                                             class="icon cart_wishlist"
                                             @isset($setting->phone) href="tel:{{ $setting?->phone }}" @endisset>
                                                <i class="fa fa-phone"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- header end -->

            <!-- slide-bar start -->
            <aside class="slide-bar">
                <div class="close-mobile-menu">
                    <a href="javascript:void(0);"><i class="fa fa-times"></i></a>
                </div>


                <!-- side-mobile-menu start -->
                <nav class="side-mobile-menu text-center">
                    <ul id="mobile-menu-active">
                        <div
                         class="icon bar d-lg-none text-danger"
                         style="font-size: 1.1rem;"
                        >
                            <a @isset($setting->phone) href="tel:{{ $setting?->phone }}" @endisset>
                                <span><i class="fa fa-phone"></i></span>
                            </a>
                            <br>
                            <a @isset($setting?->email) href="mailto:{{ $setting?->email }}"
                                @endisset>
                                <i class="fa fa-envelope"></i>
                            </a>
                        </div>
                        <hr />
                        <li><a href="#about">About</a></li>
                        <li><a href="#gallery">Gallery</a> </li>
                        <li><a href="#reviews">Reviews</a> </li>
                        <li><a href="#catering_services">Pricing & Plans</a> </li>
                        <li><a href="#contact">Contact</a> </li>
                        <li
                         class="dropdown nav-link"
                         hidden
                        >
                            <a
                             class="nav-link"
                             href="#"
                            >Menu</a>
                            <ul class="sub-menu">
                                <li><a href="javascript:void(0)">فرع 1</a></li>
                                <li><a href="javascript:void(0)">فرع 2</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- side-mobile-menu end -->
            </aside>
            <div class="body-overlay"></div>
            <!-- slide-bar end -->

            <!-- main body end -->
            <main>
                <!-- hero start -->
                <section
                 class="hero_area hero_3 section_notch_bottom"
                 data-background="assets/img/bg/hero_bg_ing_02.jpg"
                >
                    <div class="hero_wrap hero_height">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <div class="col-lg-12">
                                    <div class="hero_content_wrap text-center">
                                        <div class="hero_text shimmer">
                                            <h2>
                                                <strong>
                                                    @foreach (explode(' ', config('app.name')) as
                                                    $name)
                                                    @if ($loop->index == 1)
                                                    <span>{{ $name }}</span>
                                                    @else
                                                    {{ $name }}
                                                    @endif
                                                    @endforeach

                                                </strong>
                                            </h2>
                                        </div>
                                        <div class="hero_img">
                                            <img
                                             src="assets/img/hero/img_03.jpeg"
                                             alt=""
                                            >
                                        </div>
                                        <div class="hero_feat_wrap d-none d-md-block">
                                            <div class="hf_single sf_01 text-center">
                                                <h4><ins>Catering Services</ins></h4>
                                                <p>An unforgettable culinary experience</p>
                                                <div class="hf_shape">
                                                    <img
                                                     src="assets/img/shape/hf_01.png"
                                                     alt=""
                                                    >
                                                </div>
                                            </div>
                                            <div class="hf_single sf_02 text-center">
                                                <div class="hf_shape">
                                                    <img
                                                     src="assets/img/shape/hf_02.png"
                                                     alt=""
                                                    >
                                                </div>
                                                <h4><ins>For any occasion and place</ins></h4>
                                                <p>Catering <span
                                                     style="color: #b12e26;">DeGlobal</span> fulfill
                                                    your
                                                    dream</p>
                                            </div>
                                        </div>
                                        <div class="hero_shape">
                                            <img
                                             class="shape hs_01"
                                             src="assets/img/shape/hs_01.png"
                                             alt=""
                                            >
                                            <img
                                             class="shape hs_02"
                                             src="assets/img/shape/hs_02.png"
                                             alt=""
                                            >
                                            <img
                                             class="shape his_01"
                                             src="assets/img/shape/his_01.png"
                                             alt=""
                                            >
                                            <img
                                             class="shape his_02"
                                             src="assets/img/shape/his_02.png"
                                             alt=""
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- hero end -->


                <!-- about start -->
                <section
                 class="about_area services_space white_bg section_notch_bottom"
                 id="about"
                 style="background-image: url('assets/img/bg/bg-table4.jpg'); background-size: cover;"
                >
                    <div class="container">
                        <div class="sec_title sec_title-2">
                            <span><ins>About</ins></span>
                            <h2><strong>{{config('app.name')}}</strong></h2>
                            <div class="col-10 mx-auto text-left">
                                <p>
                                    We deal exceptionally on catering services and all type of
                                    cuisine events, ranging from wedding, birthday, corporate &
                                    business events, title taking, naming ceremony and lot more.
                                    With over two decade of experience; de global maranatha nc
                                    resources ltd is well known and specializes in everything
                                    concerning kitchen satisfaction, in all its ramification.
                                </p>
                                <p>
                                    We deal exceptionally on catering services and all series of
                                    cuisine, for all types of events. We also deal on rental
                                    services, ranging from tents of all sizes, canopies, chairs and
                                    tables. We make all kinds of smoothies, juice, cocktails,
                                    moveable bar and lot more. just name your event and we strike a
                                    deal
                                </p>
                                <p>
                                    We also import superior kitchen utensils and materials ranging
                                    from plates, spoon, superior cooler, foreign pot, foreign
                                    kitchen material and lot more.
                                </p>
                                <p>
                                    We deliver nationwide and work in all countries around the
                                    globe.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container pt-5">
                        <div class="faq_bg">
                            <div class="row">
                                <div
                                 class="col-lg-8"
                                 dir="LTR"
                                >
                                    <div class="faq_wrapper mb-30">
                                        <ul class="accordion-box clearfix">
                                            <li class="accordion block">
                                                <div class="acc-btn">
                                                    Name your event we strike a deal
                                                </div>
                                                {{-- <div
                                                 class="acc-content mt-2"
                                                 style="text-align: left;"
                                                >
                                                <p></p>
                                                </div> --}}
                                            </li>
                                            <li class="accordion block">
                                                <div class="acc-btn">
                                                    Call us today, let’s plan whatever edible about your event.
                                                </div>
                                                {{-- <div
                                                 class="acc-content current"
                                                 style="display: none;"
                                                >
                                                    <p>
                                                    </p>
                                                </div> --}}
                                            </li>
                                            <li class="accordion block">
                                                <div class="acc-btn">
                                                    De-Global Maranatha: the perfect catering services for your dream event
                                                </div>
                                                {{-- <div
                                                 class="acc-content"
                                                 style="display: none;"
                                                >
                                                    <p></p>
                                                </div> --}}
                                            </li>
                                            <li class="accordion block">
                                                <div class="acc-btn">
                                                    At the De-Global Maranatha, your belly satisfaction is all we desire.
                                                </div>
                                                {{-- <div
                                                 class="acc-content"
                                                 style="display: none;"
                                                >
                                                <p></p>
                                                </div> --}}
                                            </li>
                                            <li class="accordion block">
                                                <div class="acc-btn">
                                                    We are everywhere you are: International and Nationwide. Book Us Today
                                                </div>
                                                {{-- <div
                                                 class="acc-content"
                                                 style="display: none;"
                                                >
                                                    <p></p>
                                                </div> --}}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="faq_img">
                                        <img
                                         src="assets/img/bg/pepper.png"
                                         alt=""
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- about end -->


                <!-- catering start -->
                <section
                 class="recipe_menu_area pt-120 pb-120"
                 id="catering"
                >
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="services_img">
                                    <img
                                     src="assets/img/bg/services_bg.png"
                                     alt=""
                                    >
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div
                                 class="services_content"
                                 dir="LTR"
                                >
                                    <div class="sec_title">
                                        <span><ins>Catering</ins></span>
                                        <h2><strong>An unforgettable culinary experience</strong>
                                        </h2>
                                        <p>Make your event unforgettable</p>
                                        <p>
                                            With De-Global Maranatha Cuisines, we are here for you to come to the event without worry and Anxiety. Our Catering services and Topnotch hospitality is suitable for your corporate and special occasions, both small and large occasion.
                                        </p>
                                        <p>
                                            Together, we tailor our exquisite Food Menu for every hospitality - from Wedding, Birthday, Corporate & Business Occasion, Naming occasion, Title Taking, and different sizes of parties.
                                        </p>
                                        <hr />
                                        <ul>
                                            <li>Events are adapted to both field and indoor conditions.</li>
                                            <li>Hot and cold drinks, smoothies, moveable bar, canopies, chairs, table, utensils and furniture for events can be ordered, accompanied by courteous and attentive staff.</li>
                                        </ul>
                                    </div>
                                    <div class="experience_text">
                                        <h1>20+</h1>
                                        <h3 class="text-dark">years of experience</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- catering end -->


                <!-- Banner start -->
                <section
                 class="offer_area offer_3 section_notch2 offer_img_bg pt-120 pb-120 section_notch_top"
                 data-background="assets/img/bg/table.jpg"
                 dir="LTR"
                >
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 offset-xl-6 col-lg-8 offset-lg-4">
                                <div class="offer_content">
                                    <div class="sec_title sec_title-white">
                                        <span
                                         class="color_yellow"
                                         style="color: #ff911c;"
                                        >Delicious food for all
                                            senses!</span>
                                        <h3>Anytime and anywhere De Global Maranatha Cuisines make your dream event come through</h3>
                                    </div>

                                    <a
                                     class="thm_btn"
                                     href="#contact"
                                    >Contact Us</a>
                                </div>
                                <div class="offer_shape">
                                    <img
                                     src="assets/img/shape/offer_shape.png"
                                     alt=""
                                     style="opacity: 0.3;"
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Banner end -->


                <!-- Gallery Start -->
                <section
                 class="pb-15 pt-120 section_notch_bottom"
                 id="gallery"
                 style="background: #faf7f2;"
                >
                    <div class="sec_title sec_title-2">
                        <span><ins>Gallery</ins></span>
                        <h2><strong>View gallery</strong></h2>
                    </div>
                    <div
                     class="container page-top"
                     id="gallery_section"
                     style="overflow: hidden; height: 190px;"
                    >
                        <div class="row">
                            @foreach ($galleries as $gallery)
                            <div class="col-lg-3 col-md-4 col-xs-6 thumb pt-3 pl-3">
                                <img
                                 class="test-popup-link"
                                 href="{{asset($gallery->image)}}"
                                 src="{{asset($gallery->image)}}"
                                 class="zoom img-fluid "
                                 alt=""
                                >
                            </div>
                            @endforeach


                        </div>
                    </div>
                    <div
                     class="section-title"
                     id="gallery-chevron-btn-section"
                    >
                        <i
                         class="fa fa-chevron-down gallery-chevron"
                         id="gallery-chevron-btn"
                         style="border: 1px solid #ccc;padding: 1em;font-size: 16px;border-radius: 25px;"
                        ></i>
                    </div>
                </section>
                <!-- Gallery End -->


                <!-- Meals Start -->
                {{-- <section
                 class="shop_masonry_area shop_masonry_2 white_bg pt-120 pb-120"
                 id="meals"
                 dir="LTR"
                >
                    <div class="container">
                        <div class="sec_title sec_title-2">
                            <div class="sec_title sec_title-2">
                                <span><ins>Meals</ins></span>
                                <h2><strong>Taste the best dishes</strong></h2>
                            </div>
                            <div class="row">
                                <div class="masonry_active text-center mb-40">
                                    <button
                                     class="active"
                                     data-filter="*"
                                    >All Categories</button>
                                    <button data-filter=".salads">Salads</button>
                                    <button
                                     data-filter=".meats_on_the_fire"
                                     id="meats_on_the_fire"
                                    >On Fire</button>
                                    <button data-filter=".cooked_meats">Cooked Meats</button>
                                    <button data-filter=".fish">Fish</button>
                                    <button data-filter=".desserts">Desserts</button>
                                </div>
                            </div>
                            <div class="row grid">
                                <!-- Salads -->
                                <div class="col-lg-4 col-md-6 col-sm-6 grid-item mb-30 salads">
                                    <div class="shop_single white_bg">
                                        <div class="thumb text-center">
                                            <a
                                             class="image test-popup-link"
                                             href="assets/img/dishes/salads/salad1.jpg"
                                            ><img
                                                 src="assets/img/dishes/salads/salad1.jpg"
                                                 alt=""
                                                ></a>
                                        </div>
                                        <div class="content">
                                            <h2 class="title"><a href="javascript:void(0)">Salad
                                                    1</a></h2>
                                            <div class="s_bottom ul_li">
                                                <span class="text-dark">Salads</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 grid-item mb-30 salads">
                                    <div class="shop_single white_bg">
                                        <div class="thumb text-center">
                                            <a
                                             class="image test-popup-link"
                                             href="assets/img/dishes/salads/salad2.jpg"
                                            ><img
                                                 src="assets/img/dishes/salads/salad2.jpg"
                                                 alt=""
                                                ></a>
                                        </div>
                                        <div class="content">
                                            <h2 class="title"><a href="javascript:void(0)">Salad
                                                    2</a></h2>
                                            <div class="s_bottom ul_li">
                                                <span class="text-dark">Salads</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <!-- Meats On The Fire -->
                                <div
                                 class="col-lg-4 col-md-6 col-sm-6 grid-item mb-30 meats_on_the_fire"
                                >
                                    <div class="shop_single white_bg">
                                        <div class="thumb text-center">
                                            <a
                                             class="image test-popup-link"
                                             href="assets/img/dishes/meats_on_the_fire/bbq1.jpg"
                                            ><img
                                                 src="assets/img/dishes/meats_on_the_fire/bbq1.jpg"
                                                 alt=""
                                                ></a>
                                        </div>
                                        <div class="content">
                                            <h2 class="title"><a href="javascript:void(0)">On Fire
                                                    1</a></h2>
                                            <div class="s_bottom ul_li">
                                                <span class="text-dark">On Fire</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                 class="col-lg-4 col-md-6 col-sm-6 grid-item mb-30 meats_on_the_fire"
                                >
                                    <div class="shop_single white_bg">
                                        <div class="thumb text-center">
                                            <a
                                             class="image test-popup-link"
                                             href="assets/img/dishes/meats_on_the_fire/bbq2.jpg"
                                            ><img
                                                 src="assets/img/dishes/meats_on_the_fire/bbq2.jpg"
                                                 alt=""
                                                ></a>
                                        </div>
                                        <div class="content">
                                            <h2 class="title"><a href="javascript:void(0)">On Fire
                                                    2</a></h2>
                                            <div class="s_bottom ul_li">
                                                <span class="text-dark">On Fire</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Cooked Meats -->
                                <div
                                 class="col-lg-4 col-md-6 col-sm-6 grid-item mb-30 cooked_meats">
                                    <div class="shop_single white_bg">
                                        <div class="thumb text-center">
                                            <a
                                             class="image test-popup-link"
                                             href="assets/img/dishes/cooked_meats/meal1.jpg"
                                            ><img
                                                 src="assets/img/dishes/cooked_meats/meal1.jpg"
                                                 alt=""
                                                ></a>
                                        </div>
                                        <div class="content">
                                            <h2 class="title"><a href="javascript:void(0)">Cooked
                                                    Meats 1</a></h2>
                                            <div class="s_bottom ul_li">
                                                <span class="text-dark">Cooked Meats</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                 class="col-lg-4 col-md-6 col-sm-6 grid-item mb-30 cooked_meats">
                                    <div class="shop_single white_bg">
                                        <div class="thumb text-center">
                                            <a
                                             class="image test-popup-link"
                                             href="assets/img/dishes/cooked_meats/meal2.jpg"
                                            ><img
                                                 src="assets/img/dishes/cooked_meats/meal2.jpg"
                                                 alt=""
                                                ></a>
                                        </div>
                                        <div class="content">
                                            <h2 class="title"><a href="javascript:void(0)">Cooked
                                                    Meats 2</a></h2>
                                            <div class="s_bottom ul_li">
                                                <span class="text-dark">Cooked Meats</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Fish -->
                                <div class="col-lg-4 col-md-6 col-sm-6 grid-item mb-30 fish">
                                    <div class="shop_single white_bg">
                                        <div class="thumb text-center">
                                            <a
                                             class="image test-popup-link"
                                             href="assets/img/dishes/fish/fish1.jpg"
                                            ><img
                                                 src="assets/img/dishes/fish/fish1.jpg"
                                                 alt=""
                                                ></a>
                                        </div>
                                        <div class="content">
                                            <h2 class="title"><a href="javascript:void(0)">Fish
                                                    1</a></h2>
                                            <div class="s_bottom ul_li">
                                                <span class="text-dark">Fish</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 grid-item mb-30 fish">
                                    <div class="shop_single white_bg">
                                        <div class="thumb text-center">
                                            <a
                                             class="image test-popup-link"
                                             href="assets/img/dishes/fish/fish2.jpg"
                                            ><img
                                                 src="assets/img/dishes/fish/fish2.jpg"
                                                 alt=""
                                                ></a>
                                        </div>
                                        <div class="content">
                                            <h2 class="title"><a href="javascript:void(0)">Fish
                                                    2</a></h2>
                                            <div class="s_bottom ul_li">
                                                <span class="text-dark">Fish</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- Dessert -->
                                <div class="col-lg-4 col-md-6 col-sm-6 grid-item mb-30 desserts">
                                    <div class="shop_single white_bg">
                                        <div class="thumb text-center">
                                            <a
                                             class="image test-popup-link"
                                             href="assets/img/dishes/desserts/dessert1.jpg"
                                            ><img
                                                 src="assets/img/dishes/desserts/dessert1.jpg"
                                                 alt=""
                                                ></a>
                                        </div>
                                        <div class="content">
                                            <h2 class="title"><a href="javascript:void(0)">Desserts
                                                    1</a></h2>
                                            <div class="s_bottom ul_li">
                                                <span class="text-dark">Desserts</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 grid-item mb-30 desserts">
                                    <div class="shop_single white_bg">
                                        <div class="thumb text-center">
                                            <a
                                             class="image test-popup-link"
                                             href="assets/img/dishes/desserts/dessert2.jpg"
                                            ><img
                                                 src="assets/img/dishes/desserts/dessert2.jpg"
                                                 alt=""
                                                ></a>
                                        </div>
                                        <div class="content">
                                            <h2 class="title"><a href="javascript:void(0)">Desserts
                                                    2</a></h2>
                                            <div class="s_bottom ul_li">
                                                <span class="text-dark">Desserts</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Demo -->
                                <div class="col-lg-4 col-md-6 col-sm-6 grid-item mb-30 cat5 cat4">
                                    <div class="shop_single white_bg">
                                        <div class="thumb text-center">
                                            <a
                                             class="image"
                                             href="shop-details.html"
                                            ><img
                                                 src="assets/img/dishes/desserts/dessert2.jpg"
                                                 alt=""
                                                ></a>
                                            <div class="actions">
                                                <a
                                                 href="#"
                                                 class="action"
                                                ><i class="fa fa-shopping-basket"></i></a>
                                                <a
                                                 href="#"
                                                 class="action"
                                                ><i class="fa fa-heart"></i></a>
                                                <a
                                                 href="#"
                                                 class="action"
                                                ><i class="fa fa-eye"></i></a>
                                            </div>
                                            <span class="badge">New</span>
                                        </div>
                                        <div class="content">
                                            <div class="s_top ul_li">
                                                <span class="cat">Demo</span>
                                                <ul class="rating_star ul_li">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <h3 class="title"><a href="shop-details.html">Useable
                                                    Template</a></h3>
                                            <div class="s_bottom ul_li">
                                                <span>Price - </span>
                                                <span class="new"> $53.00 </span>
                                                <span class="old"> $75.00 </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="ca_btn text-center pt-20">
                                        <a
                                         class="thm_btn"
                                         href="javascript:void(0)"
                                        >View All Meals</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section> --}}
                <!-- Meals End -->


                <!-- testimonial start -->
                <section
                 class="testimonial_area testimonial_2 section_notch2 section_notch_top"
                 data-background="assets/img/bg/reservation_bg.jpg"
                 id="reviews"
                >
                    <div class="container-fluid p-0">
                        <div class="row flex-row-reverse">
                            <div class="col-lg-6">
                                <div class="reservation_img pos-rel">
                                    <img
                                     src="assets/img/bg/testimonial_bg.jpg"
                                     alt=""
                                    >
                                    <a
                                     class="popup-video video_icon"
                                     href="https://www.youtube.com/watch?v=cRXm1p-CNyk"
                                    ><i class="fa fa-play"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="testimonial_content_wrap text-center">
                                    <div class="sec_title sec_title-white">
                                        <span>Expert opinions</span>
                                        <h2><strong>Read expert opinions</strong></h2>
                                    </div>
                                    <div class="testimonial_active-3 owl-carousel">
                                        <div class="tm_item">
                                            <div class="tm_icon">
                                                <img
                                                 src="assets/img/icon/tm_q_02.png"
                                                 alt=""
                                                >
                                            </div>
                                            <p
                                             class="quote-title"
                                             dir="LTR"
                                            >What is the Beauty of De Global Maranatha Cuisines in Nigeria?</p>
                                            <p class="quote-text">For over two decades now, De-Global Maranatha Cuisines has been known as the most prominent Catering services, which is considered the most authentic capital for Exquisite and Delicious food, for both small and large occasion. De Global Maranatha Cuisines services is a "must-have" for everyone that aspires to perfect it’s occasion.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- testimonial end -->


                <!-- Reviews Start -->
                {{-- <div class="container rounded pt-120">
                    <div class="sec_title text-center">
                        <span><ins>Customer opinion</ins></span>
                        <h2><strong>Our customers say</strong></h2>
                    </div>
                    <div class="row">
                        <div class="masonry_active2 text-center mb-40">
                            <button
                             class="active"
                             data-filter="*"
                            >All reviews</button>
                            <button
                             data-filter=".tripadvisor"
                             id="tripadvisor"
                            >TripAdvisor</button>
                            <button data-filter=".google">Google</button>
                        </div>
                    </div>
                    <div class="row grid2">
                        <!-- TripAdvisor -->
                        <div class="col-lg-4 col-md-6 col-sm-6 grid-item2 mb-30 tripadvisor">
                            <div class="shop_single white_bg">
                                <div class="thumb text-center">
                                    <a
                                     class="image test-popup-link"
                                     href="assets/img/reviews/tripadvisor/1.jpg"
                                    ><img
                                         src="assets/img/reviews/tripadvisor/1.jpg"
                                         alt=""
                                        ></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 grid-item2 mb-30 tripadvisor">
                            <div class="shop_single white_bg">
                                <div class="thumb text-center">
                                    <a
                                     class="image test-popup-link"
                                     href="assets/img/reviews/tripadvisor/2.jpg"
                                    ><img
                                         src="assets/img/reviews/tripadvisor/2.jpg"
                                         alt=""
                                        ></a>
                                </div>
                            </div>
                        </div>


                        <!-- Google -->
                        <div class="col-lg-4 col-md-6 col-sm-6 grid-item2 mb-30 google">
                            <div class="shop_single white_bg">
                                <div class="thumb text-center">
                                    <a
                                     class="image test-popup-link"
                                     href="assets/img/reviews/google/1.jpg"
                                    ><img
                                         src="assets/img/reviews/google/1.jpg"
                                         alt=""
                                        ></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 grid-item2 mb-30 google">
                            <div class="shop_single white_bg">
                                <div class="thumb text-center">
                                    <a
                                     class="image test-popup-link"
                                     href="assets/img/reviews/google/2.jpg"
                                    ><img
                                         src="assets/img/reviews/google/2.jpg"
                                         alt=""
                                        ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <!-- Reviews End -->


                <div class="section_notch mt-5"></div>


                <!-- Services Start -->
                <section
                 class="services_area blog_2 pt-120 pb-120"
                 id="catering_services"
                 dir="LTR"
                 style="background: #faf7f2;"
                >
                    <div class="container">
                        <div class="sec_title sec_title-2">
                            <span><ins>Pricing & Plans</ins></span>
                            {{-- <h6><strong>Pri</strong></h6> --}}
                        </div>
                        <div class="row justify-content-md-center">
                            <div class="col-lg-3 col-md-6">
                                <div class="blog_single mb-30">
                                    <div class="services_thumb">
                                        <a href="javascript:void(0)">
                                            <img
                                             src="assets/img/services/silver.png"
                                             alt=""
                                            >
                                        </a>
                                    </div>
                                    <div class="blog_content">
                                        <span class="tag"><a
                                             href="javascript:void(0)"><strong>Silver</strong></a></span>

                                        <ul>
                                            <li>100 - 3,000 Guests</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="blog_single mb-30">
                                    <div class="services_thumb">
                                        <a href="javascript:void(0)">
                                            <img
                                             src="assets/img/services/gold.png"
                                             alt=""
                                            >
                                        </a>
                                    </div>
                                    <div class="blog_content">
                                        <span class="tag">
                                            <a href="#">
                                                <strong>
                                                    Gold
                                                </strong>
                                            </a>
                                        </span>
                                        <ul>
                                            <li>100 - 3,000 Guests</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="blog_single mb-30">
                                    <div class="services_thumb">
                                        <a href="javascript:void(0)">
                                            <img
                                             src="assets/img/services/premium.png"
                                             alt=""
                                            >
                                        </a>
                                    </div>
                                    <div class="blog_content">
                                        <span class="tag">
                                            <a href="#">
                                                <strong>
                                                    Premium
                                                </strong>
                                            </a>
                                        </span>
                                        <ul>
                                            <li>100 - 3,000 Guests</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="blog_single mb-30">
                                    <div class="services_thumb">
                                        <a href="javascript:void(0)">
                                            <img
                                             src="assets/img/services/supreme.png"
                                             alt=""
                                            >
                                        </a>
                                    </div>
                                    <div class="blog_content">
                                        <span class="tag">
                                            <a href="#">
                                                <strong>
                                                    Supreme
                                                </strong>
                                            </a>
                                        </span>
                                        <ul>
                                            <li>100 - 3,000 Guests</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="ca_btn text-center pt-20">
                                    <a
                                     class="thm_btn"
                                     href="#contact"
                                    >Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Services End -->

                <!-- Contact -->
                <section
                 class="reservation_area section_notch_top"
                 data-background="assets/img/bg/reservation_bg.jpg"
                 id="contact"
                 style="background-image: url(_assets/img/bg/reservation_bg.html);"
                 dir="LTR"
                >
                    <div class="container-fluid p-0">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="reservation_img">
                                    <img
                                     src="assets/img/bg/rest.jpg"
                                     alt=""
                                    >
                                </div>
                            </div>
                            <div
                             class="col-lg-6"
                             id="scrollTo"
                            >
                                <div class="reservation_form_wrap">
                                    <div class="sec_title sec_title-white text-center">
                                        <span>Contact Us</span>
                                        <h2>Leave your details and we will contact you soon</h2>
                                    </div>
                                    <div id="error-wrapper">
                                        <div
                                         class="alert alert-success alert-dismissible fade show"
                                         role="alert"
                                         id="successAlert"
                                         style="font-weight: 700; display: none;"
                                        >
                                            <p>Your message has been sent successfully, we will get
                                                back to you as soon as
                                                possible.</p>
                                        </div>
                                        <div
                                         class="alert alert-danger"
                                         role="alert"
                                         id="errorAlert"
                                         style="font-weight: 700; display: none;"
                                        >
                                            {{-- JS Content here --}}
                                        </div>
                                    </div>
                                    <form
                                     class="form_wrap"
                                     id="contact-form"
                                     method="post"
                                     style="display: block;"
                                     action="{{ route('front.contact') }}"
                                     novalidate
                                    >
                                        @csrf
                                        <div class="r_field">
                                            <input
                                             type="text"
                                             name="name"
                                             id="name"
                                             placeholder="Full name"
                                             required="required"
                                            />
                                            <i class="fa fa-user"></i>
                                        </div>

                                        <div class="r_field">
                                            <input
                                             type="tel"
                                             name="phone"
                                             id="phone"
                                             placeholder="Phone number"
                                             onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')"
                                             required="required"
                                            />
                                            <i class="fa fa-phone"></i>
                                        </div>

                                        <div class="r_field">
                                            <input
                                             type="email"
                                             name="email"
                                             id="email"
                                             placeholder="Email Address"
                                             required="required"
                                            />
                                            <i class="fa fa-user"></i>
                                        </div>

                                        <div class="r_field">
                                            <textarea
                                             name="message"
                                             id="message"
                                             cols="30"
                                             rows="10"
                                             placeholder="Message"
                                            ></textarea>
                                        </div>
                                        <input type="text" style="width:0px; height:0px; display: none" name="details">
                                        <div class="button text-center">
                                            <button
                                             class="thm_btn"
                                             type="submit"
                                             id="send_a_message"
                                            >
                                                <span class="">
                                                    Send Message
                                                </span>
                                                <span
                                                 class="spinner-border spinner-border-sm d-none"
                                                ></span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
            <!-- main body end -->

            <!-- Footer Start -->
            <footer
             class="footer-area footer_bg"
             dir="LTR"
            >
                <div class="footer_main pt-100 pb-50">
                    <div class="container">
                        <div class="d-flex justify-content-between">
                            <div class="col-4">
                                <div class="footer_widget">
                                    <h3>{{ config('app.name') }}</h3>
                                    <p>With God, we do great exploits by making your dream event come through.</p>
                                    <div class="open_hour_wrap ul_li">
                                        <div class="icon">
                                            <img
                                             src="assets/img/icon/t_hour.png"
                                             alt=""
                                            >
                                        </div>
                                        <div class="or_text">
                                            <h4><ins>Work Hours</ins></h4>
                                            @isset($setting?->open_hours)
                                            @foreach (explode(',', $setting?->open_hours) as $hour)
                                            <span>{{ $hour }}</span>
                                            @endforeach
                                            @endisset
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="footer_widget">
                                    <h3>Contact Us</h3>
                                    <ul class="c_wrap">
                                        @isset($setting?->address)
                                        <li><span>Address</span>: {{ $setting?->address }}</li>
                                        @endisset
                                        @isset($setting?->email)
                                        <li><span>Email</span>: {{ $setting?->email }}</li>
                                        @endisset
                                        @isset($setting?->phone)
                                        <li><span>Phone</span>: {{ $setting?->phone }}</li>
                                        @endisset
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer_bottom">
                    <div class="container">
                        <div class="copyright_wrap text-center">
                            <div class="row align-items-center">
                                <div class="col-lg-3 col-md-3">
                                    <div class="logo">
                                        <a href="{{url('/')}}">
                                            <img
                                             src="{{asset($setting?->logo ?? 'assets/img/logo/logo.png')}}"
                                             alt=""
                                            />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-9">
                                    <div
                                     class="copyright text-md-center"
                                     dir="ltr"
                                    >
                                        <p>
                                            All Rights Reserved © {{ config('app.name') }}
                                            {{ now()->format('Y') }}
                                            <br>
                                            Developed By <a
                                             href="https://horezone.com"
                                            >Horezone.com</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-12">
                                    <div class="social_links text-lg-end">
                                        @if ($setting?->facebook)
                                        <a
                                         href="{{ $setting?->facebook }}"
                                         target="_blank"
                                        ><i class="fa fa-facebook"></i></a>
                                        @endif

                                        @if ($setting?->twitter)
                                        <a
                                         href="{{ $setting?->twitter }}"
                                         target="_blank"
                                        ><i class="fa fa-twitter"></i></a>
                                        @endif

                                        @if ($setting?->instagram)
                                        <a
                                         href="{{ $setting?->instagram }}"
                                         target="_blank"
                                        ><i class="fa fa-instagram"></i></a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- Footer End -->
        </div>
        <!-- body wrap end -->

        <!-- jquery include -->
        <script src="assets/js/jquery-3.5.0.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nice-select.min.js"></script>
        <script src="assets/js/jquery-ui.js"></script>
        <script src="assets/js/datepicker.js"></script>
        <script src="assets/js/jquery.timepicker.min.js"></script>
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/main.js"></script>
        <script src="assets/js/fontawesome.js"></script>
        <script src="assets/js/fontawesome.min.js"></script>
        <script src="assets/js/send_message.js"></script>

        <!-- Image Popup -->
        <script src="assets/js/image-popup.js"></script>

        <!-- Image Zoom -->
        <script src="assets/js/img_zoom.js"></script>

        <!-- Gallery expand -->
        <script src="assets/js/gallery_expand.js"></script>


        <script>
            function masonryClick() {
            $(document).ready(function() {
                // document.getElementById('meats_on_the_fire').click();
                // document.getElementById('tripadvisor').click();
            });
        }
        </script>

        @isset($setting?->chat_script)
            {!! $setting?->chat_script !!}
        @endisset

        @isset($setting?->phone)
        <!-- GetButton.io widget -->
        <script type="text/javascript">
            (function() {
            var options = {
                whatsapp: "{{$setting?->phone}}", // WhatsApp number
                call_to_action: "Message us", // Call to action
                button_color: "#FF6550", // Color of button
                position: "left", // Position may be 'right' or 'left'
            };
            var proto = 'https:',
                host = "getbutton.io",
                url = proto + '//static.' + host;
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = url + '/widget-send-button/js/init.js';
            s.onload = function() {
                WhWidgetSendButton.init(host, proto, options);
            };
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
        })();
        </script>
        <!-- /GetButton.io widget -->
        @endisset

    </body>


</html>
