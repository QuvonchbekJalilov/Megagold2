<header class="main-header header-style-two">

    <div class="header-top">
        <div class="auto-container">
            <div class="inner-container">
                <div class="top-left">
                    <div class="date">{{__('words.timeTable')}}: {{__('words.MonFri')}}: 09:00 AM-6:00 PM</div>
                </div>
                <div class="top-right">
                    <ul class="social-icon-four">
                        <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                        <li><a href="#"><span class="fab fa-brands fa-linkedin"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="header-lower">
        <div class="auto-container">
            <div class="inner-container">
                <div class="logo-box">
                    <div class="logo"><a href="/"><img src="/assets/images/logo-dark.png" alt="" title="Transend" width="190px"></a></div>
                </div>

                <div class="main-box">

                    <div class="nav-outer">
                        <nav class="nav main-menu">
                            <ul class="navigation">
                                <li><a href="{{ route('index')}}">{{__('words.home')}}</a></li>

                                <li><a href="{{route('about')}}">{{__('words.about')}}</a></li>
                                <li><a href="{{route('product')}}">{{__('words.category')}}</a></li>
                                <li><a href="{{route('blog')}}">{{__('words.blog')}}</a></li>
                                <li><a href="{{route('contact')}}">{{__('words.contact')}}</a></li>

                                <li class="dropdown"><a href="#">{{__('words.language')}}</a>
                                    <ul>
                                        <li><a href="/uz">UZ</a></li>
                                        <li><a href="/ru">RU</a></li>
                                        <li><a href="/en">EN</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>

                    </div>
                </div>
                <div class="outer-box">

                    <div class="grid-nav-btn mobile-nav-toggler">
                        <div class="inner">
                            <img class="icons" src="/assets/images/icons/icon-1.png" alt="Icon">
                        </div>
                    </div>
                </div>

                <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
            </div>
        </div>
    </div>

    <div class="mobile-menu">
        <div class="menu-backdrop"></div>

        <nav class="menu-box">
            <div class="upper-box">
                <div class="nav-logo"><a href="{{ route('index')}}"><img src="images/logo-white.png" alt="" title=""></a></div>
                <div class="close-btn"><i class="icon fa fa-times"></i></div>
            </div>
            <ul class="navigation clearfix">

            </ul>
            <ul class="contact-list-one">
                <li>

                    <div class="contact-info-box">
                        <i class="icon lnr-icon-phone-handset"></i>
                        <span class="title">{{__('words.phone')}}</span>
                        <a href="tel:+998998405555">+998 (99) 840 55 55</a>
                    </div>
                </li>
                <li>

                    <div class="contact-info-box">
                        <span class="icon lnr-icon-envelope1"></span>
                        <span class="title">{{__('words.send')}} {{__('words.email')}}</span>
                        <a href="mailto:info@megagold.com"><span class="__cf_email__" data-cfemail="8ee6ebe2feceede1e3feefe0f7a0ede1e3">info@megagold.uz</span></a>
                    </div>
                </li>
                <li>

                    <div class="contact-info-box">
                        <span class="icon lnr-icon-clock"></span>
                        <span class="title">{{__('words.send')}} {{__('words.email')}}</span>
                        Mon - Sat 8:00 - 6:30, Sunday - CLOSED
                    </div>
                </li>
            </ul>
            <ul class="social-links">
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </nav>
    </div>

    <div class="search-popup">
        <span class="search-back-drop"></span>
        <button class="close-search"><span class="fa fa-times"></span></button>
        
    </div>
    <div class="sticky-header">
        <div class="auto-container">
            <div class="inner-container">
                <div class="logo">
                    <a href="{{ route('index')}}" title=""><img src="/assets/images/logo-dark.png" alt="" title=""></a>
                </div>
                <div class="nav-outer">
                    <nav class="main-menu">
                        <div class="navbar-collapse show collapse clearfix">
                            <ul class="navigation clearfix">

                            </ul>
                        </div>
                    </nav>
                    <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
                </div>
            </div>
        </div>
    </div>
</header>
