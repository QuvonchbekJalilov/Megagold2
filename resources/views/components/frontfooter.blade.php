<?php

use App\Models\Category;

$categories = Category::all();

?>
<footer class="main-footer" style="background-image: url(/assets/images/background/8.jpg)">

    <div class="widgets-section style-two">
        <div class="auto-container">
            <div class="row">

                <div class="footer-column col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="footer-widget about-widget">
                        <div class="logo"><a href="{{ route('index')}}"><img src="/assets/images/logo-white.png" alt=""></a></div>
                        <div class="text">{{__('words.footerAbout')}}</div>
                        <ul class="social-icon-six">
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="footer-column col-xl-2 col-lg-2 col-md-6 col-sm-6 offset-xl-1">
                    <div class="footer-widget company-widget style-two">
                        <h3 class="widget-title">{{ __('words.useful')}} {{__('words.links')}}</h3>
                        <ul class="user-links">
                            <li><a href="{{ route('index')}}">{{__('words.home')}}</a></li>
                            <li><a href="{{ route('about')}}">{{__('words.about')}}</a></li>
                            <li><a href="{{ route('blog')}}">{{__('words.blog')}}</a></li>
                            <li><a href="{{ route('contact')}}">{{__('words.contact')}}</a></li>
                        </ul>
                    </div>
                </div>

                <div class="footer-column col-xl-2 col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget company-widget">
                        <h3 class="widget-title">{{__('words.category')}}</h3>
                        <ul class="user-links">
                            @foreach ($categories as $category)
                            <li><a href="{{ route('products',['product' => $category->id])}}">{{ $category['name_'.App::getLocale()]}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom style-two">
        <div class="auto-container">
            <div class="inner-container">
                <div class="copyright-text">
                    <p>Copyright © 2024 <a href="https://dora.uz">Dora</a>. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>