<?php
$lang = \Illuminate\Support\Facades\App::getLocale();
$contacts = \App\Models\Contact::latest()->first();
//ismoil Usmonov
?>

        <!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Mega Metal Gold</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="/assets/img/Shapemgm2-01.png" href="/assets/img/Shapemgm2-01.png">

<!-- Meta Keywords -->
    <meta name="keywords" content="MegaGold, metal products, metal solutions, industrial metal, high-quality metal, metal industry, metal supplier, metal manufacturing">

    <!-- Canonical Link -->
    <link rel="canonical" href="https://megagold.uz/">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="MegaGold - Leading Metal Products and Solutions">
    <meta property="og:description" content="MegaGold offers premium metal products and solutions. Discover our wide range of high-quality metal products tailored for various industries.">
    <meta property="og:image" content="https://megagold.uz/images/og-image.jpg">
    <meta property="og:url" content="https://megagold.uz/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="MegaGold">
        <meta name="author" content="MegaGold">

    <!-- Place favicon.ico in the root directory -->

    <!-- ==========================================
                CSS FILES HERE
    ========================================== -->
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/animate.min.css">
    <link rel="stylesheet" href="/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="/assets/css/meanmenu.css">
    <link rel="stylesheet" href="/assets/css/slick.css">
    <link rel="stylesheet" href="/assets/css/twentytwenty.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/responsive.css">
</head>

<body>
<!-- ==========================================
            PRELOADER AREA START
========================================== -->

<!-- ==========================================
            PRELOADER AREA END
========================================== -->
<main>
    <!-- HEADER AREA START  -->
    <div class="header_area" id="header-sticky">
        <div class="custom-container">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-2">
                        <div class="logo">
                            <a href="/"> <img src="/assets/img/MegaGoldMetall2-01.png" style="width: 95px;" alt="site_logo"></a>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="row align-items-center text-end">
                            <div class="col-md-10 col-lg-10 text-end">
                                <div class="main_menu">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li><a href="/">{{__('words.home')}}</a></li>
                                            <li><a href="/about">{{__('words.about')}}</a></li>
                                            <li><a href="/product">{{__('words.category')}}</a></li>
                                            <li><a href="/blog">{{__('words.blog')}}</a></li>
                                            <li><a href="/contact">{{__('words.contact')}}</a></li>
                                            <li><a href="tel:{{ $contacts->phone_number }}" id="quote_btn"><span>{{ $contacts->phone_number?? null }}</span> <i
                                                            class="fas fa-chevron-right"></i></a></li>
                                                            
                                        </ul>
                                    </nav>
                                </div>
                                <!-- <div class="mobile-menu"></div> -->
                            </div>
                            <div class="col-md-2 col-lg-2 d-sm-none d-xl-block">
                                <div class="menu_essential">
                                    <div class="quote">

                                    </div>
                                    <div class="lan_currencey mx-2">
                                        <ul>
                                            <li><a href="#">@if($lang == 'en') English @endif @if($lang == 'ru') Русский @endif @if($lang == 'uz') Uzbekcha @endif:</a></li>
                                            <li id="showcurrencey"><a href="javascript:void();">
                                                    @if($lang == 'en') Eng @endif
                                                    @if($lang == 'ru') Руc @endif
                                                    @if($lang == 'uz') Uzb @endif
                                                </a><i class="far fa-chevron-down"></i>
                                                <ul class="currencey">
                                                    <li><a class="dropdown-item" href="/uz">Uzb</a></li>
                                                    <li><a class="dropdown-item" href="/ru">Руc</a></li>
                                                    <li><a class="dropdown-item" href="/en">Eng</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="">
                                        <a href="javascript:void();" class="open_burger"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- HEADER AREA END   -->

    <div class="sidebar">
        <div class="wrap d-flex">
            <div class="logo mb-30">
                <img src="/assets/img/MegaGoldMetall2-01.png" alt="">
            </div>
            <div class="close_btn_sidebar">
                <span class="searchClose sidebarClose"> <i class="fal fa-times-circle"></i></span>
            </div>
        </div>
        <div class="paragraph mb-40">
            <p>
                Sed ut perspiciatis unde omnis iste natus error voluptatem Sed ut perspiciatis unde omnis iste natus
                error voluptatem. Sed ut perspiciatis, Sed ut perspiciatis unde omnis iste natus error voluptatem
                Sed ut
                perspiciatis unde omnis iste natus error voluptatem. Sed ut perspiciatis
            </p>
        </div>
        <h4 class="project_title">Beautiful Projects</h4>

        <div class="show_projects">
            <!-- project area start  -->
            <div class="project_slider text-center">
                <div class="project_activitionn">
                    <div class="project_items">
                        <img src="/assets/img/home_two_ass/projects/p1.png" alt="">
                    </div>
                    <div class="project_items">
                        <img src="/assets/img/home_two_ass/projects/p3.png" alt="">
                    </div>
                    <div class="project_items">
                        <img src="/assets/img/home_two_ass/projects/p1.png" alt="">
                    </div>
                    <div class="project_items">
                        <img src="/assets/img/home_two_ass/projects/p3.png" alt="">
                    </div>
                    <div class="project_items">
                        <img src="/assets/img/home_two_ass/projects/p1.png" alt="">
                    </div>
                </div>
            </div>
            <!-- project area end  -->
        </div>
        <div class="contact_us pt-70">
            <h4 class="contact-title mb-20">contact us</h4>
            <ul class="inline_list">
                <li><img src="/assets/img/slide/mailblue.png" alt=""><a
                        href="mailto:info@magegold.uz">info@magegold.uz</a></li>
                <li><img src="/assets/img/slide/phonblue.png" alt=""><a href="tel:+4733378901">+4733378901"</a>
                </li>
            </ul>
            <div class="social_link pt-20 mb-20">
                <ul>
                    <li><a href="#"><i class="fab fa-facebook-f icon"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter icon"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram icon"></i></a></li>
                    <li><a href="#"><i class="fab fa-youtube icon"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="activemobile">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-2">
                    <div class="mobile-logo">
                        <a href="/"><img src="/assets/img/MegaGoldMetall2-01.png" style="height:50px !important;" alt=""></a>
                    </div>
                </div>
                <div class="col-8 text-end">
                    <div class="icon">
                        <a href="#" class="open-mobile-menu"><i class="far fa-bars"></i></a>
                        <!-- <div class="mobile-menu">
                        </div> -->
                        
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- mobile menu -->
    <div class="fix">
        <div class="side-info">
            <button class="side-info-close"><i class="fal fa-times"></i></button>
            <div class="side__logo mb-25">
                <a href="{{ route('index')}}">
                    <img src="/assets/img/MegaGoldMetall2-01.png" alt="logo" />
                </a>
            </div>
            <div class="mobile-menu"></div>
            <div class="language-selector mt-30 mb-30">
                <h4>{{__('words.language')}}</h4>
                <select id="mobile-language-selector" style="width:100% !important; border: 0px !important;" onchange="changeLanguage(this.value)">
                    <option value="en" {{ $lang == 'en' ? 'selected' : '' }}>English (EN)</option>
                    <option value="uz" {{ $lang == 'uz' ? 'selected' : '' }}>Uzbek (UZ)</option>
                    <option value="ru" {{ $lang == 'ru' ? 'selected' : '' }}>Русский (RU)</option>
                </select>
            </div>
            <script>
    function changeLanguage(language) {
        window.location.href = `/${language}`;
    }
            </script>
            <div class="contact-infos mt-30 mb-30">
                <div class="contact-list mb-30">
                    <h4>
                        Contact Info
                    </h4>
                    <ul>
                        <li><i class="fal fa-map"></i>
                            <a href="#">12/A, Tashkent City, UZB</a>
                        </li>

                        <li><i class="fal fa-clock"></i>
                            <a href="#">Mon - Fri: 9.00am - 11.00pm</a>
                        </li>

                        <li><i class="fal fa-phone"></i><a href="tel:+998998405555">
                                +99899 840 55 55
                            </a>
                        </li>
                        <li><i class="fal fa-phone"></i><a href="tel:++998979066666">
                                +99897 906 66 66
                            </a>
                        </li>

                        <li><i class="far fa-envelope"></i><a href="mailto:info@magegold.uz">{{strtolower('info@megagold.uz')}}</a>
                        </li>
                    </ul>

                </div>
            </div>

        </div>
    </div>
    <div class="offcanvas-overlay"></div>
    <!-- slide area start  -->

    {{ $slot }}
</main>


<!-- ==========================================
            javascript FILES HERE
========================================== -->

<script>
    function sendMessage() {
        const name = document.getElementById('name').value;
        const phone_number = document.getElementById('phone_number').value;
        const messagesText = document.getElementById('message').value;

        if (!name || !phone_number || !messagesText) {
            alert('Iltimos, barcha maydonlarni to\'ldiring.');
            return;
        }

        const message = `A contact form submission has been received:\n\nName: ${name}\nPhone Number: ${phone_number}\nMessage: ${messagesText}`;
        const telegramBotToken = '7217681658:AAGzxilWkKBQqgxsA9Nte_T3viv4I7c2TkY'; // Bu yerga o'zingizning bot tokeningizni qo'ying
        const telegramChatId = '-4236704302'; // Bu yerga o'zingizning chat ID ni qo'ying

        const url = `https://api.telegram.org/bot${telegramBotToken}/sendMessage`;
        const data = {
            chat_id: telegramChatId,
            text: message
        };

        fetch(url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        })
            .then(response => response.json())
            .then(data => {
                if (data.ok) {
                    alert('Xabar yuborildi!');
                    document.getElementById('name').value = '';
                    document.getElementById('phone_number').value = '';
                    document.getElementById('message').value = '';
                } else {
                    alert('Xatolik yuz berdi. Iltimos, qaytadan urinib ko\'ring.');
                }
            })
            .catch(error => {
                console.error('Xatolik:', error);
                alert('Xatolik yuz berdi. Iltimos, qaytadan urinib ko\'ring.');
            });
    }
</script>
<!-- ==========================================
                javascript FILES HERE
    ========================================== -->
<script src="/assets/js/vendor/modernizr-3.5.0.min.js"></script>
<script src="/assets/js/vendor/jquery-v-3.6.0.0.min.js"></script>
<script src="/assets/js/bootstrap4.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/isotope.pkgd.min.js"></script>
<script src="/assets/js/jquery.meanmenu.min.js"></script>
<script src="/assets/js/wow.min.js"></script>
<script src="/assets/js/jquery.magnific-popup.min.js"></script>
<script src="/assets/js/slick.min.js"></script>
<script src="/assets/js/jquery.event.move.js"></script>
<script src="/assets/js/scriptfour.js"></script>
<script src="/assets/js/scriptSix.js"></script>
<script src="/assets/js/scriptseven.js"></script>
<script src="/assets/js/jquery.twentytwenty.js"></script>
<script src="/assets/js/jquery.lazy.min.js"></script>
<script src="/assets/js/scroll.js"></script>
<script src="/assets/js/multiple-image-video(MIV).js"></script>
<script src="/assets/js/preloader.js"></script>
<script src="/assets/js/imagesloaded.pkgd.min.js"></script>
<script src="/assets/js/main.js"></script>
</body>

</html>