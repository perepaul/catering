<!doctype html>
<html lang="zxx">


<!-- Mirrored from nicurb.com/demos/templates/catering_elbasha/LTR/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Jun 2022 17:43:02 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <!-- css include -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/datepicker.css">
    <link rel="stylesheet" href="assets/css/jquery.timepicker.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/common.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/divider.css">
    <link rel="stylesheet" href="assets/css/text-animation.css">
    <link rel="stylesheet" href="assets/css/image-animation.html">


    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>



<body onLoad="masonryClick()">
    <!-- body wrap start -->
    <div class="body_wrap">

        <!-- backtotop - start -->
        <div id="thetop"></div>
        <div id="backtotop">
            <a href="#" id="scroll">
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
        <header class="header_area header_3 transparent_header" dir="LTR">
            <div id="sticky-header" class="header_wrap header_space">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-2 col-6">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="assets/img/logo/logo.png" alt="logo">
                                    <img src="assets/img/logo/logo_black.png" alt="logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-7 d-none d-lg-block">
                            <div class="main_menu_wrap navbar navbar-expand-lg">
                                <nav class="main_menu collapse navbar-collapse">
                                    <ul class="main_menu_list ul_li">
                                        <li><a class="nav-link" href="#about">About</a> </li>
                                        <li><a class="nav-link" href="#gallery">Gallery</a> </li>
                                        <li><a class="nav-link" href="#meals">Meals</a> </li>
                                        <li><a class="nav-link" href="#reviews">Reviews</a> </li>
                                        <li><a class="nav-link" href="#catering_services">Services</a> </li>
                                        <li><a class="nav-link" href="#contact">Contact</a> </li>
                                        <li class="dropdown nav-link" hidden>
                                            <a class="nav-link" href="#">Menu</a>
                                            <ul class="sub-menu">
                                                <li><a href="javascript:void(0)">Sub 1</a></li>
                                                <li><a href="javascript:void(0)">Sub 2</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">
                            <div class="header_right ul_li_right">
                                <div class="header_carts ul_li">
                                    <div class="hamburger_menu">
                                        <a href="javascript:void(0);" class="active">
                                            <div class="icon bar d-lg-none">
                                                <span><i class="fa fa-bars"></i></span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="ul_li">
                                        <a class="icon cart_wishlist bg-waze"
                                            href="https://ul.waze.com/ul?ll=32.70815560%2C35.30405045&amp;navigate=yes&amp;zoom=13&amp;utm_campaign=waze_website&amp;utm_source=waze_website&amp;utm_medium=lm_share_location">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                                id="Layer_1" x="0px" y="0px" width="20px"
                                                height="20px" viewBox="0 0 200 200"
                                                enable-background="new 0 0 200 200" xml:space="preserve">
                                                <g>
                                                    <path fill="#303030"
                                                        d="M99.513,76.832c0,4.719-3.825,8.545-8.544,8.545c-4.718,0-8.544-3.826-8.544-8.545   c0-4.719,3.826-8.543,8.544-8.543C95.688,68.289,99.513,72.112,99.513,76.832" />
                                                    <path fill="#303030"
                                                        d="M139.43,76.832c0,4.719-3.826,8.545-8.545,8.545c-4.718,0-8.544-3.826-8.544-8.545   c0-4.719,3.826-8.543,8.544-8.543C135.604,68.289,139.43,72.112,139.43,76.832" />
                                                    <path fill="#303030"
                                                        d="M110.621,122.646c-14.477,0-27.519-9.492-29.911-21.917c-0.464-2.412,1.116-4.745,3.528-5.209   c2.413-0.465,4.745,1.116,5.209,3.528c1.406,7.304,10.152,14.996,21.81,14.691c12.144-0.318,20.165-7.58,21.813-14.588   c0.563-2.391,2.961-3.872,5.35-3.312c2.393,0.563,3.875,2.958,3.312,5.349c-1.346,5.721-5.03,11.021-10.375,14.926   c-5.567,4.07-12.438,6.324-19.866,6.52C111.201,122.643,110.91,122.646,110.621,122.646" />
                                                    <path fill="#303030"
                                                        d="M183.97,81.47c-1.644-9.71-5.5-18.811-11.464-27.051c-6.736-9.307-15.951-17.078-26.648-22.472   c-10.812-5.452-22.88-8.335-34.9-8.335c-3.391,0-6.809,0.23-10.16,0.682c-14.034,1.896-27.833,7.734-38.856,16.439   c-12.42,9.808-20.435,22.418-23.177,36.469C37.948,81.379,37.6,86,37.263,90.468c-0.528,6.994-1.074,14.226-3.298,18.952   c-1.52,3.23-3.788,5.381-9.919,5.381c-3.374,0-6.457,1.908-7.963,4.928c-1.505,3.02-1.173,6.631,0.857,9.324   c9.237,12.254,21.291,19.676,33.982,24.148c-0.578,1.746-0.903,3.605-0.903,5.545c0,9.744,7.899,17.643,17.643,17.643   c9.503,0,17.229-7.518,17.606-16.928c4.137,0.225,23.836,0.279,26.033,0.217c0.487,9.309,8.167,16.711,17.596,16.711   c9.743,0,17.642-7.898,17.642-17.643c0-2.221-0.428-4.338-1.176-6.295c6.918-3.365,13.448-7.906,19.146-13.375   c7.946-7.625,13.778-16.621,16.868-26.016C184.854,102.486,185.728,91.857,183.97,81.47 M67.662,164.568   c-3.215,0-5.822-2.605-5.822-5.822c0-3.215,2.607-5.822,5.822-5.822c3.216,0,5.822,2.607,5.822,5.822   C73.484,161.963,70.878,164.568,67.662,164.568 M128.897,164.568c-3.216,0-5.823-2.605-5.823-5.822   c0-3.215,2.607-5.822,5.823-5.822s5.822,2.607,5.822,5.822C134.72,161.963,132.113,164.568,128.897,164.568 M172.925,110.281   c-5.095,15.49-18.524,28.281-32.835,34.83c-3.047-2.504-6.943-4.006-11.192-4.006c-6.848,0-12.771,3.906-15.694,9.607   c-2.976,0.123-25.135,0.047-29.984-0.285c-2.972-5.547-8.822-9.322-15.557-9.322c-4.48,0-8.559,1.682-11.669,4.434   c-12.054-3.895-23.438-10.551-31.947-21.842c25.161,0,20.196-28.118,23.451-44.792c4.959-25.412,30.099-42.499,54.491-45.794   c3-0.405,6-0.602,8.969-0.602C151.047,32.51,186.732,68.302,172.925,110.281" />
                                                </g>
                                            </svg>
                                        </a>
                                        <a class="icon cart_wishlist" href="tel:123456789">
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
                    <div class="icon bar d-lg-none text-danger" style="font-size: 1.1rem;">
                        <a href="tel:123456789">
                            <span><i class="fa fa-phone"></i> 123456789</span>
                        </a>
                        <br>
                        <a
                            href="https://ul.waze.com/ul?ll=32.70815560%2C35.30405045&amp;navigate=yes&amp;zoom=13&amp;utm_campaign=waze_website&amp;utm_source=waze_website&amp;utm_medium=lm_share_location">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    version="1.1" id="Layer_1" x="0px" y="0px" width="20px"
                                    height="20px" viewBox="0 0 200 200" enable-background="new 0 0 200 200"
                                    xml:space="preserve">
                                    <g>
                                        <path fill="#303030"
                                            d="M99.513,76.832c0,4.719-3.825,8.545-8.544,8.545c-4.718,0-8.544-3.826-8.544-8.545   c0-4.719,3.826-8.543,8.544-8.543C95.688,68.289,99.513,72.112,99.513,76.832" />
                                        <path fill="#303030"
                                            d="M139.43,76.832c0,4.719-3.826,8.545-8.545,8.545c-4.718,0-8.544-3.826-8.544-8.545   c0-4.719,3.826-8.543,8.544-8.543C135.604,68.289,139.43,72.112,139.43,76.832" />
                                        <path fill="#303030"
                                            d="M110.621,122.646c-14.477,0-27.519-9.492-29.911-21.917c-0.464-2.412,1.116-4.745,3.528-5.209   c2.413-0.465,4.745,1.116,5.209,3.528c1.406,7.304,10.152,14.996,21.81,14.691c12.144-0.318,20.165-7.58,21.813-14.588   c0.563-2.391,2.961-3.872,5.35-3.312c2.393,0.563,3.875,2.958,3.312,5.349c-1.346,5.721-5.03,11.021-10.375,14.926   c-5.567,4.07-12.438,6.324-19.866,6.52C111.201,122.643,110.91,122.646,110.621,122.646" />
                                        <path fill="#303030"
                                            d="M183.97,81.47c-1.644-9.71-5.5-18.811-11.464-27.051c-6.736-9.307-15.951-17.078-26.648-22.472   c-10.812-5.452-22.88-8.335-34.9-8.335c-3.391,0-6.809,0.23-10.16,0.682c-14.034,1.896-27.833,7.734-38.856,16.439   c-12.42,9.808-20.435,22.418-23.177,36.469C37.948,81.379,37.6,86,37.263,90.468c-0.528,6.994-1.074,14.226-3.298,18.952   c-1.52,3.23-3.788,5.381-9.919,5.381c-3.374,0-6.457,1.908-7.963,4.928c-1.505,3.02-1.173,6.631,0.857,9.324   c9.237,12.254,21.291,19.676,33.982,24.148c-0.578,1.746-0.903,3.605-0.903,5.545c0,9.744,7.899,17.643,17.643,17.643   c9.503,0,17.229-7.518,17.606-16.928c4.137,0.225,23.836,0.279,26.033,0.217c0.487,9.309,8.167,16.711,17.596,16.711   c9.743,0,17.642-7.898,17.642-17.643c0-2.221-0.428-4.338-1.176-6.295c6.918-3.365,13.448-7.906,19.146-13.375   c7.946-7.625,13.778-16.621,16.868-26.016C184.854,102.486,185.728,91.857,183.97,81.47 M67.662,164.568   c-3.215,0-5.822-2.605-5.822-5.822c0-3.215,2.607-5.822,5.822-5.822c3.216,0,5.822,2.607,5.822,5.822   C73.484,161.963,70.878,164.568,67.662,164.568 M128.897,164.568c-3.216,0-5.823-2.605-5.823-5.822   c0-3.215,2.607-5.822,5.823-5.822s5.822,2.607,5.822,5.822C134.72,161.963,132.113,164.568,128.897,164.568 M172.925,110.281   c-5.095,15.49-18.524,28.281-32.835,34.83c-3.047-2.504-6.943-4.006-11.192-4.006c-6.848,0-12.771,3.906-15.694,9.607   c-2.976,0.123-25.135,0.047-29.984-0.285c-2.972-5.547-8.822-9.322-15.557-9.322c-4.48,0-8.559,1.682-11.669,4.434   c-12.054-3.895-23.438-10.551-31.947-21.842c25.161,0,20.196-28.118,23.451-44.792c4.959-25.412,30.099-42.499,54.491-45.794   c3-0.405,6-0.602,8.969-0.602C151.047,32.51,186.732,68.302,172.925,110.281" />
                                    </g>
                                </svg>
                                Waze
                            </span>
                        </a>
                    </div>
                    <hr />
                    <li><a href="#about">About</a></li>
                    <li><a href="#gallery">Gallery</a> </li>
                    <li><a href="#meals">Meals</a> </li>
                    <li><a href="#reviews">Reviews</a> </li>
                    <li><a href="#catering_services">Services</a> </li>
                    <li><a href="#contact">Contact</a> </li>
                    <li class="dropdown nav-link" hidden>
                        <a class="nav-link" href="#">Menu</a>
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
            <section class="hero_area hero_3 section_notch_bottom" data-background="assets/img/bg/hero_bg_ing_02.jpg">
                <div class="hero_wrap hero_height">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-lg-12">
                                <div class="hero_content_wrap text-center">
                                    <div class="hero_text shimmer">
                                        <h2>
                                            <strong>
                                                @foreach (explode(' ', config('app.name')) as $name)
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
                                        <img src="assets/img/hero/img_03.png" alt="">
                                    </div>
                                    <div class="hero_feat_wrap d-none d-md-block">
                                        <div class="hf_single sf_01 text-center">
                                            <h4><ins>Catering Services</ins></h4>
                                            <p>An unforgettable culinary experience</p>
                                            <div class="hf_shape">
                                                <img src="assets/img/shape/hf_01.png" alt="">
                                            </div>
                                        </div>
                                        <div class="hf_single sf_02 text-center">
                                            <div class="hf_shape">
                                                <img src="assets/img/shape/hf_02.png" alt="">
                                            </div>
                                            <h4><ins>For any occasion and place</ins></h4>
                                            <p>Catering <span style="color: #b12e26;">El-Basha</span> fulfill your
                                                dream</p>
                                        </div>
                                    </div>
                                    <div class="hero_shape">
                                        <img class="shape hs_01" src="assets/img/shape/hs_01.png" alt="">
                                        <img class="shape hs_02" src="assets/img/shape/hs_02.png" alt="">
                                        <img class="shape his_01" src="assets/img/shape/his_01.png" alt="">
                                        <img class="shape his_02" src="assets/img/shape/his_02.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- hero end -->


            <!-- about start -->
            <section class="about_area services_space white_bg section_notch_bottom" id="about"
                style="background-image: url('assets/img/bg/bg-table4.jpg'); background-size: cover;">
                <div class="container">
                    <div class="sec_title sec_title-2">
                        <span><ins>About</ins></span>
                        <h2><strong>Catering El-Basha</strong></h2>
                        <p>Meat Restaurant, Home Food, Oriental Food, Meat, Fish, Hummus, Seafood, Barbecue, Arabic Food
                        </p>
                        <p>Palestine has been the home of Al Basha Restaurant for over 50 years. The well-known and
                            beloved restaurant, which has been bringing seafood to the Arab community since the 1970s,
                            was established. In 1993, management of the restaurant passed to his children, most
                            famously Chef Ibrahim, whom you may know as one of the main contestants on the first season
                            of Master Chef.</p>
                        <p>Today, the second generation continues to promote Al Pasha Restaurant, which has risen to new
                            heights in cooking and has become a brand just like its owner. Homemade and fresh food, with
                            Syrian, Lebanese and Turkish influences, has gained a huge fan base over the years
                            – and today it can be said with certainty that it is a pilgrimage hotspot for locals and
                            tourists alike. The open kitchen lets you see how the magic happens in real time</p>
                    </div>
                </div>
                <div class="container pt-5">
                    <div class="faq_bg">
                        <div class="row">
                            <div class="col-lg-8" dir="LTR">
                                <div class="faq_wrapper mb-30">
                                    <ul class="accordion-box clearfix">
                                        <li class="accordion block">
                                            <div class="acc-btn">
                                                The love of food is passed down from generation to generation
                                            </div>
                                            <div class="acc-content mt-2" style="text-align: left;">
                                                <p>The chef of the restaurant today is Ibrahim Pasha who took his
                                                    father's dishes and added to them fresh, high quality and fresh
                                                    ingredients, which became Pasha's hallmark. What has not changed,
                                                    and probably never will, is the family's passion for
                                                    home-cooked food, on which the Pasha and his sons were brought up.
                                                    Flavors from mom and grandma are still the main thing, so it's no
                                                    wonder you feel the love in every bite</p>
                                            </div>
                                        </li>
                                        <li class="accordion block">
                                            <div class="acc-btn">
                                                Something special is happening in the kitchen
                                            </div>
                                            <div class="acc-content current" style="display: none;">
                                                <p>The meat at Al Pasha Restaurant is the highlight and some of the main
                                                    dishes are actually meat dishes, with excellent flavors and aromas
                                                    from charcoal grills (rare in our area). Try for example fresh
                                                    circle shawarma, minced lamb kebab, thin lamb
                                                    chops and also lamb skewers, which are only worth booking a place
                                                    for. The meat is served alongside a rich selection of salads and
                                                    appetizers such as Abu Dahl's special hummus. There is also fresh
                                                    grilled fish that comes every morning from the
                                                    Sea of ​​Galilee, the Mediterranean and the breeding ponds. Menu
                                                    entrees on seafood such as shrimp and calamari; traditional Arabic
                                                    dishes such as kobe, amaranth and coffee; And for dessert, kunafa,
                                                    orchid, baklava in various flavors and more
                                                </p>
                                            </div>
                                        </li>
                                        <li class="accordion block">
                                            <div class="acc-btn">
                                                El-Basha: the perfect stopping point for tourists
                                            </div>
                                            <div class="acc-content" style="display: none;">
                                                <p>Groups from abroad who come to tour the exciting city of Nazareth,
                                                    are invited to experience the city through the painting. After
                                                    visiting the religious and tourist centers, it is worth staying at
                                                    the Pasha and connecting with Nazareth on a
                                                    culinary level as well. A must on every visit to Palestine.</p>
                                            </div>
                                        </li>
                                        <li class="accordion block">
                                            <div class="acc-btn">
                                                The design also honors Nazareth
                                            </div>
                                            <div class="acc-content" style="display: none;">
                                                <p>The outer walls of the restaurant are surrounded by a cylindrical
                                                    stone in order to preserve the charm and authenticity of Nazareth. A
                                                    shaded terrace and a variety of flowers welcome diners who can relax
                                                    in it and enjoy a pleasant and cool
                                                    atmosphere at all hours of the day. The interior of the restaurant
                                                    has been given a design that blends modern and oriental and
                                                    immediately evokes a sense of relaxation.</p>
                                            </div>
                                        </li>
                                        <li class="accordion block">
                                            <div class="acc-btn">
                                                Events are celebrated at the Pasha
                                            </div>
                                            <div class="acc-content" style="display: none;">
                                                <p>You are welcome to hold an event of up to 80 people in the
                                                    restaurant, which will conclude in your honor. A great food menu
                                                    will be put together just for you, bringing to the front of the
                                                    stage the very best that Pasha has to offer - from
                                                    starters, through mains to desserts. If the event is taking place in
                                                    your home, you can order catering services and delight your guests
                                                    with delicious cuisine without the hassle of cooking.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="faq_img">
                                    <img src="assets/img/bg/pepper.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- about end -->


            <!-- catering start -->
            <section class="recipe_menu_area pt-120 pb-120" id="catering">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="services_img">
                                <img src="assets/img/bg/services_bg.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="services_content" dir="LTR">
                                <div class="sec_title">
                                    <span><ins>Catering</ins></span>
                                    <h2><strong>An unforgettable culinary experience</strong></h2>
                                    <p>Make your event unforgettable</p>
                                    <p>With a personal and professional escort, we are here for you to come to the event
                                        without worry. Catering services and hospitality trays from Al Basha Restaurant
                                        are suitable for business and special occasions, both small and large.</p>
                                    <p>Together, we tailor our Halal Dairy Food Menu for every hospitality - from cup
                                        lifts, to hospitality trays for meetings, to parties and parties.</p>
                                    <hr />
                                    <ul>
                                        <li>Events are adapted to both field and indoor conditions.</li>
                                        <li>Hot and cold drinks, utensils and furniture for events can be ordered,
                                            accompanied by courteous and attentive staff.</li>
                                    </ul>
                                </div>
                                <div class="experience_text">
                                    <h1>45</h1>
                                    <h3 class="text-dark">year of experience</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- catering end -->


            <!-- Banner start -->
            <section class="offer_area offer_3 section_notch2 offer_img_bg pt-120 pb-120 section_notch_top"
                data-background="assets/img/bg/table.jpg" dir="LTR">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 offset-xl-6 col-lg-8 offset-lg-4">
                            <div class="offer_content">
                                <div class="sec_title sec_title-white">
                                    <span class="color_yellow" style="color: #ff911c;">Delicious food for all
                                        senses!</span>
                                    <h3>Anytime and anywhere catering <span><strong>El-Basha</strong></span> make your
                                        dreams come true</h3>
                                </div>
                                <ul class="offer_btn ul_li">
                                    <li>
                                        <div class="offer_price">
                                            <h4>$49.99 <span>Special Offer</span></h4>
                                        </div>
                                    </li>
                                </ul>
                                <a class="thm_btn" href="#contact">Contact Us</a>
                            </div>
                            <div class="offer_shape">
                                <img src="assets/img/shape/offer_shape.png" alt="" style="opacity: 0.3;">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Banner end -->


            <!-- Gallery Start -->
            <section class="pb-15 pt-120 section_notch_bottom" id="gallery" style="background: #faf7f2;">
                <div class="sec_title sec_title-2">
                    <span><ins>Gallery</ins></span>
                    <h2><strong>View gallery</strong></h2>
                </div>
                <div class="container page-top" id="gallery_section" style="overflow: hidden; height: 190px;">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-xs-6 thumb pt-3 pl-3">
                            <img class="test-popup-link" href="assets/img/gallery/1.jpg"
                                src="assets/img/gallery/1.jpg" class="zoom img-fluid " alt="">
                        </div>
                        <div class="col-lg-3 col-md-4 col-xs-6 thumb pt-3 pl-3">
                            <img class="test-popup-link" href="assets/img/gallery/2.jpg"
                                src="assets/img/gallery/2.jpg" class="zoom img-fluid " alt="">
                        </div>
                        <div class="col-lg-3 col-md-4 col-xs-6 thumb pt-3 pl-3">
                            <img class="test-popup-link" href="assets/img/gallery/3.jpg"
                                src="assets/img/gallery/3.jpg" class="zoom img-fluid " alt="">
                        </div>
                        <div class="col-lg-3 col-md-4 col-xs-6 thumb pt-3 pl-3">
                            <img class="test-popup-link" href="assets/img/gallery/4.jpg"
                                src="assets/img/gallery/4.jpg" class="zoom img-fluid " alt="">
                        </div>
                        <div class="col-lg-3 col-md-4 col-xs-6 thumb pt-3 pl-3">
                            <img class="test-popup-link" href="assets/img/gallery/5.jpg"
                                src="assets/img/gallery/5.jpg" class="zoom img-fluid " alt="">
                        </div>
                        <div class="col-lg-3 col-md-4 col-xs-6 thumb pt-3 pl-3">
                            <img class="test-popup-link" href="assets/img/gallery/6.jpg"
                                src="assets/img/gallery/6.jpg" class="zoom img-fluid " alt="">
                        </div>
                        <div class="col-lg-3 col-md-4 col-xs-6 thumb pt-3 pl-3">
                            <img class="test-popup-link" href="assets/img/gallery/7.jpg"
                                src="assets/img/gallery/7.jpg" class="zoom img-fluid " alt="">
                        </div>
                        <div class="col-lg-3 col-md-4 col-xs-6 thumb pt-3 pl-3">
                            <img class="test-popup-link" href="assets/img/gallery/8.jpg"
                                src="assets/img/gallery/8.jpg" class="zoom img-fluid " alt="">
                        </div>
                        <div class="col-lg-3 col-md-4 col-xs-6 thumb pt-3 pl-3">
                            <img class="test-popup-link" href="assets/img/gallery/9.jpg"
                                src="assets/img/gallery/9.jpg" class="zoom img-fluid " alt="">
                        </div>
                        <div class="col-lg-3 col-md-4 col-xs-6 thumb pt-3 pl-3">
                            <img class="test-popup-link" href="assets/img/gallery/10.jpg"
                                src="assets/img/gallery/10.jpg" class="zoom img-fluid " alt="">
                        </div>
                        <div class="col-lg-3 col-md-4 col-xs-6 thumb pt-3 pl-3">
                            <img class="test-popup-link" href="assets/img/gallery/11.jpg"
                                src="assets/img/gallery/11.jpg" class="zoom img-fluid " alt="">
                        </div>
                        <div class="col-lg-3 col-md-4 col-xs-6 thumb pt-3 pl-3">
                            <img class="test-popup-link" href="assets/img/gallery/12.jpg"
                                src="assets/img/gallery/12.jpg" class="zoom img-fluid " alt="">
                        </div>

                    </div>
                </div>
                <div class="section-title" id="gallery-chevron-btn-section">
                    <i class="fa fa-chevron-down gallery-chevron" id="gallery-chevron-btn"
                        style="border: 1px solid #ccc;padding: 1em;font-size: 16px;border-radius: 25px;"></i>
                </div>
            </section>
            <!-- Gallery End -->


            <!-- Meals Start -->
            <section class="shop_masonry_area shop_masonry_2 white_bg pt-120 pb-120" id="meals" dir="LTR">
                <div class="container">
                    <div class="sec_title sec_title-2">
                        <div class="sec_title sec_title-2">
                            <span><ins>Meals</ins></span>
                            <h2><strong>Taste the best dishes</strong></h2>
                        </div>
                        <div class="row">
                            <div class="masonry_active text-center mb-40">
                                <button class="active" data-filter="*">All Categories</button>
                                <button data-filter=".salads">Salads</button>
                                <button data-filter=".meats_on_the_fire" id="meats_on_the_fire">On Fire</button>
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
                                        <a class="image test-popup-link"
                                            href="assets/img/dishes/salads/salad1.jpg"><img
                                                src="assets/img/dishes/salads/salad1.jpg" alt=""></a>
                                    </div>
                                    <div class="content">
                                        <h2 class="title"><a href="javascript:void(0)">Salad 1</a></h2>
                                        <div class="s_bottom ul_li">
                                            <span class="text-dark">Salads</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 grid-item mb-30 salads">
                                <div class="shop_single white_bg">
                                    <div class="thumb text-center">
                                        <a class="image test-popup-link"
                                            href="assets/img/dishes/salads/salad2.jpg"><img
                                                src="assets/img/dishes/salads/salad2.jpg" alt=""></a>
                                    </div>
                                    <div class="content">
                                        <h2 class="title"><a href="javascript:void(0)">Salad 2</a></h2>
                                        <div class="s_bottom ul_li">
                                            <span class="text-dark">Salads</span>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <!-- Meats On The Fire -->
                            <div class="col-lg-4 col-md-6 col-sm-6 grid-item mb-30 meats_on_the_fire">
                                <div class="shop_single white_bg">
                                    <div class="thumb text-center">
                                        <a class="image test-popup-link"
                                            href="assets/img/dishes/meats_on_the_fire/bbq1.jpg"><img
                                                src="assets/img/dishes/meats_on_the_fire/bbq1.jpg" alt=""></a>
                                    </div>
                                    <div class="content">
                                        <h2 class="title"><a href="javascript:void(0)">On Fire 1</a></h2>
                                        <div class="s_bottom ul_li">
                                            <span class="text-dark">On Fire</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 grid-item mb-30 meats_on_the_fire">
                                <div class="shop_single white_bg">
                                    <div class="thumb text-center">
                                        <a class="image test-popup-link"
                                            href="assets/img/dishes/meats_on_the_fire/bbq2.jpg"><img
                                                src="assets/img/dishes/meats_on_the_fire/bbq2.jpg" alt=""></a>
                                    </div>
                                    <div class="content">
                                        <h2 class="title"><a href="javascript:void(0)">On Fire 2</a></h2>
                                        <div class="s_bottom ul_li">
                                            <span class="text-dark">On Fire</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Cooked Meats -->
                            <div class="col-lg-4 col-md-6 col-sm-6 grid-item mb-30 cooked_meats">
                                <div class="shop_single white_bg">
                                    <div class="thumb text-center">
                                        <a class="image test-popup-link"
                                            href="assets/img/dishes/cooked_meats/meal1.jpg"><img
                                                src="assets/img/dishes/cooked_meats/meal1.jpg" alt=""></a>
                                    </div>
                                    <div class="content">
                                        <h2 class="title"><a href="javascript:void(0)">Cooked Meats 1</a></h2>
                                        <div class="s_bottom ul_li">
                                            <span class="text-dark">Cooked Meats</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 grid-item mb-30 cooked_meats">
                                <div class="shop_single white_bg">
                                    <div class="thumb text-center">
                                        <a class="image test-popup-link"
                                            href="assets/img/dishes/cooked_meats/meal2.jpg"><img
                                                src="assets/img/dishes/cooked_meats/meal2.jpg" alt=""></a>
                                    </div>
                                    <div class="content">
                                        <h2 class="title"><a href="javascript:void(0)">Cooked Meats 2</a></h2>
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
                                        <a class="image test-popup-link" href="assets/img/dishes/fish/fish1.jpg"><img
                                                src="assets/img/dishes/fish/fish1.jpg" alt=""></a>
                                    </div>
                                    <div class="content">
                                        <h2 class="title"><a href="javascript:void(0)">Fish 1</a></h2>
                                        <div class="s_bottom ul_li">
                                            <span class="text-dark">Fish</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 grid-item mb-30 fish">
                                <div class="shop_single white_bg">
                                    <div class="thumb text-center">
                                        <a class="image test-popup-link" href="assets/img/dishes/fish/fish2.jpg"><img
                                                src="assets/img/dishes/fish/fish2.jpg" alt=""></a>
                                    </div>
                                    <div class="content">
                                        <h2 class="title"><a href="javascript:void(0)">Fish 2</a></h2>
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
                                        <a class="image test-popup-link"
                                            href="assets/img/dishes/desserts/dessert1.jpg"><img
                                                src="assets/img/dishes/desserts/dessert1.jpg" alt=""></a>
                                    </div>
                                    <div class="content">
                                        <h2 class="title"><a href="javascript:void(0)">Desserts 1</a></h2>
                                        <div class="s_bottom ul_li">
                                            <span class="text-dark">Desserts</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 grid-item mb-30 desserts">
                                <div class="shop_single white_bg">
                                    <div class="thumb text-center">
                                        <a class="image test-popup-link"
                                            href="assets/img/dishes/desserts/dessert2.jpg"><img
                                                src="assets/img/dishes/desserts/dessert2.jpg" alt=""></a>
                                    </div>
                                    <div class="content">
                                        <h2 class="title"><a href="javascript:void(0)">Desserts 2</a></h2>
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
                                        <a class="image" href="shop-details.html"><img
                                                src="assets/img/dishes/desserts/dessert2.jpg" alt=""></a>
                                        <div class="actions">
                                            <a href="#" class="action"><i
                                                    class="fa fa-shopping-basket"></i></a>
                                            <a href="#" class="action"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="action"><i class="fa fa-eye"></i></a>
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
                                        <h3 class="title"><a href="shop-details.html">Useable Template</a></h3>
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
                                    <a class="thm_btn" href="javascript:void(0)">View All Meals</a>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
            <!-- Meals End -->


            <!-- testimonial start -->
            <section class="testimonial_area testimonial_2 section_notch2 section_notch_top"
                data-background="assets/img/bg/reservation_bg.jpg" id="reviews">
                <div class="container-fluid p-0">
                    <div class="row flex-row-reverse">
                        <div class="col-lg-6">
                            <div class="reservation_img pos-rel">
                                <img src="assets/img/bg/testimonial_bg.jpg" alt="">
                                <a class="popup-video video_icon"
                                    href="https://www.youtube.com/watch?v=cRXm1p-CNyk"><i class="fa fa-play"></i></a>
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
                                            <img src="assets/img/icon/tm_q_02.png" alt="">
                                        </div>
                                        <p class="quote-title" dir="LTR">What is the charm of Al-Basha Restaurant
                                            in Palestine?</p>
                                        <p class="quote-text">For five decades now, Al-Basha has been known as the most
                                            prominent restaurant in Nazareth, which is considered the authentic food
                                            capital of Palestine, for both the tourists who visit the city. A visit to
                                            Al-Basha Restaurant has
                                            always been a "must-have" for everyone who comes to Nazareth and aspires to
                                            feel it through its taste. However</p>
                                        <div class="author_info">
                                            <div class="author">
                                                <img src="assets/img/logo/logo.png" alt="">
                                            </div>
                                            <h4>www.nicurb.com</h4>
                                            <span style="font-size: 1rem;">
                                                <a href="https://www.nicurb.com/" target="_blank">
                                                    <i class="fa fa-eye"></i>
                                                    <strong>Read</strong> Article
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="tm_item">
                                        <div class="tm_icon">
                                            <img src="assets/img/icon/tm_q_02.png" alt="">
                                        </div>
                                        <p class="quote-title" dir="LTR">What is the charm of Al-Basha Restaurant
                                            in Palestine?</p>
                                        <p class="quote-text">For five decades now, Al-Basha has been known as the most
                                            prominent restaurant in Nazareth, which is considered the authentic food
                                            capital of Palestine, for both the tourists who visit the city. A visit to
                                            Al-Basha Restaurant has
                                            always been a "must-have" for everyone who comes to Nazareth and aspires to
                                            feel it through its taste. However</p>
                                        <div class="author_info">
                                            <div class="author">
                                                <img src="assets/img/logo/logo.png" alt="">
                                            </div>
                                            <h4>www.nicurb.com</h4>
                                            <span style="font-size: 1rem;">
                                                <a href="https://www.nicurb.com/" target="_blank">
                                                    <i class="fa fa-eye"></i>
                                                    <strong>Read</strong> Article
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- testimonial end -->


            <!-- Reviews Start -->
            <div class="container rounded pt-120">
                <div class="sec_title text-center">
                    <span><ins>Customer opinion</ins></span>
                    <h2><strong>Our customers say</strong></h2>
                </div>
                <div class="row">
                    <div class="masonry_active2 text-center mb-40">
                        <button class="active" data-filter="*">All reviews</button>
                        <button data-filter=".tripadvisor" id="tripadvisor">TripAdvisor</button>
                        <button data-filter=".google">Google</button>
                    </div>
                </div>
                <div class="row grid2">
                    <!-- TripAdvisor -->
                    <div class="col-lg-4 col-md-6 col-sm-6 grid-item2 mb-30 tripadvisor">
                        <div class="shop_single white_bg">
                            <div class="thumb text-center">
                                <a class="image test-popup-link" href="assets/img/reviews/tripadvisor/1.jpg"><img
                                        src="assets/img/reviews/tripadvisor/1.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 grid-item2 mb-30 tripadvisor">
                        <div class="shop_single white_bg">
                            <div class="thumb text-center">
                                <a class="image test-popup-link" href="assets/img/reviews/tripadvisor/2.jpg"><img
                                        src="assets/img/reviews/tripadvisor/2.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>


                    <!-- Google -->
                    <div class="col-lg-4 col-md-6 col-sm-6 grid-item2 mb-30 google">
                        <div class="shop_single white_bg">
                            <div class="thumb text-center">
                                <a class="image test-popup-link" href="assets/img/reviews/google/1.jpg"><img
                                        src="assets/img/reviews/google/1.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 grid-item2 mb-30 google">
                        <div class="shop_single white_bg">
                            <div class="thumb text-center">
                                <a class="image test-popup-link" href="assets/img/reviews/google/2.jpg"><img
                                        src="assets/img/reviews/google/2.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Reviews End -->


            <div class="section_notch mt-5"></div>


            <!-- Services Start -->
            <section class="services_area blog_2 pt-120 pb-120" id="catering_services" dir="LTR"
                style="background: #faf7f2;">
                <div class="container">
                    <div class="sec_title sec_title-2">
                        <span><ins>Services</ins></span>
                        <h2><strong>Catering For Services</strong></h2>
                    </div>
                    <div class="row justify-content-md-center">
                        <div class="col-lg-3 col-md-6">
                            <div class="blog_single mb-30">
                                <div class="services_thumb">
                                    <a href="javascript:void(0)">
                                        <img src="assets/img/services/wedding.jpg" alt="">
                                    </a>
                                </div>
                                <div class="blog_content">
                                    <span class="tag"><a href="javascript:void(0)">Service</a></span>
                                    <h3 class="new"><a href="javascript:void(0)">enchanting wedding</a></h3>
                                    <p>Your wedding could be tastier than ever. A wedding of dairy products, meat and
                                        plants</p>
                                    <ul class="blog_meta pt-10 ul_li">
                                        <li class="cmt"><a href="#">Read More</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="blog_single mb-30">
                                <div class="services_thumb">
                                    <a href="javascript:void(0)">
                                        <img src="assets/img/services/private_events.jpg" alt="">
                                    </a>
                                </div>
                                <div class="blog_content">
                                    <span class="tag"><a href="#">Service</a></span>
                                    <h3><a href="javascript:void(0)">Private events</a></h3>
                                    <p>On occasions small or big, enrich the experience with great flavors and great
                                        service</p>
                                    <br>
                                    <ul class="blog_meta pt-10 ul_li">
                                        <li class="cmt"><a href="#">Read More</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="blog_single mb-30">
                                <div class="services_thumb">
                                    <a href="javascript:void(0)">
                                        <img src="assets/img/services/business_events.jpg" alt="">
                                    </a>
                                </div>
                                <div class="blog_content">
                                    <span class="tag"><a href="#">Service</a></span>
                                    <h3><a href="javascript:void(0)">Business events</a></h3>
                                    <p>From light refreshments to a full meal, we have the attitude and tools to serve
                                        you on a special tasting business event!</p>
                                    <ul class="blog_meta pt-10 ul_li">
                                        <li class="cmt"><a href="#">Read More</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="blog_single mb-30">
                                <div class="services_thumb">
                                    <a href="javascript:void(0)">
                                        <img src="assets/img/services/trays.jpg" alt="">
                                    </a>
                                </div>
                                <div class="blog_content">
                                    <span class="tag"><a href="#">Service</a></span>
                                    <h3><a href="javascript:void(0)">hospitality trays</a></h3>
                                    <p>Beautiful hospitality trays for parties, hospitality and business events, in a
                                        rich variety</p>
                                    <ul class="blog_meta pt-10 ul_li">
                                        <li class="cmt"><a href="#">Read More</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="ca_btn text-center pt-20">
                                <a class="thm_btn" href="#contact">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Services End -->

            <!-- Contact -->
            <section class="reservation_area section_notch_top" data-background="assets/img/bg/reservation_bg.jpg"
                id="contact" style="background-image: url(_assets/img/bg/reservation_bg.html);" dir="LTR">
                <div class="container-fluid p-0">
                    <div class="row g-0">
                        <div class="col-lg-6">
                            <div class="reservation_img">
                                <img src="assets/img/bg/rest.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6" id="scrollTo">
                            <div class="reservation_form_wrap">
                                <div class="sec_title sec_title-white text-center">
                                    <span>Contact Us</span>
                                    <h2>Leave your details and we will contact you soon</h2>
                                </div>
                                <div id="error-wrapper">
                                    <div class="alert alert-success alert-dismissible fade show" role="alert"
                                        id="successAlert" style="font-weight: 700; display: none;">
                                        <p>Your message has been sent successfully, we will get back to you as soon as
                                            possible.</p>
                                    </div>
                                    <div class="alert alert-danger" role="alert" id="errorAlert"
                                        style="font-weight: 700; display: none;">
                                        {{-- JS Content here --}}
                                    </div>
                                </div>
                                <form class="form_wrap" id="contact-form" method="post" style="display: block;"
                                    action="{{ route('front.contact') }}" novalidate>
                                    @csrf
                                    <div class="r_field">
                                        <input type="text" name="name" id="name" placeholder="Full name"
                                            required="required" />
                                        <i class="fa fa-user"></i>
                                    </div>

                                    <div class="r_field">
                                        <input type="tel" name="phone" id="phone"
                                            placeholder="Phone number"
                                            onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')"
                                            required="required" />
                                        <i class="fa fa-phone"></i>
                                    </div>

                                    <div class="r_field">
                                        <input type="email" name="email" id="email"
                                            placeholder="Email Address" required="required" />
                                        <i class="fa fa-user"></i>
                                    </div>

                                    <div class="r_field">
                                        <textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                    </div>
                                    <div class="button text-center">
                                        <button class="thm_btn" type="submit" id="send_a_message">
                                            <span class="">
                                                Send Message
                                            </span>
                                            <span class="spinner-border spinner-border-sm d-none"></span>
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
        <footer class="footer-area footer_bg" dir="LTR">
            <div class="footer_top pt-120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-md-6">
                            <div class="sub_text">
                                <h3>Subscribe to the email service</h3>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6">
                            <form class="sub_from" action="#" dir="ltr">
                                <input type="text" placeholder="E-mail Address">
                                <button>Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_main pt-100 pb-50">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <div class="footer_widget">
                                <h3>Catering El-Basha</h3>
                                <p>Meat Restaurant, Home Food, Oriental Food, Meat, Fish, Hummus, Seafood, Barbecue,
                                    Arabic Food</p>
                                <div class="open_hour_wrap ul_li">
                                    <div class="icon">
                                        <img src="assets/img/icon/t_hour.png" alt="">
                                    </div>
                                    <div class="or_text">
                                        <h4><ins>Work Hours</ins></h4>
                                        <span>Every day: 08:00 - 23:00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="footer_widget">
                                <h3>Contact Us</h3>
                                <ul class="c_wrap">
                                    <li><span>Address</span>: Nazareth - Palestine</li>
                                    <li><span>Email</span>: support@nicurb.com</li>
                                    <li><span>Phone</span>: 123456789</li>
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
                                    <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-9">
                                <div class="copyright text-md-center" dir="ltr">
                                    <p>
                                        All Rights Reserved © Catering El-Basha 2021
                                        <br>
                                        Design By <a href="https://nicurb.com/">NiCurb</a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-12">
                                <div class="social_links text-lg-end">
                                    <a href="https://facebook.com/" target="_blank"><i
                                            class="fa fa-facebook"></i></a>
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
                document.getElementById('meats_on_the_fire').click();
                document.getElementById('tripadvisor').click();
            });
        }
    </script>

    <!-- GetButton.io widget -->
    <script type="text/javascript">
        (function() {
            var options = {
                whatsapp: "+2349018123268", // WhatsApp number
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
</body>


<!-- Mirrored from nicurb.com/demos/templates/catering_elbasha/LTR/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Jun 2022 17:44:30 GMT -->

</html>
