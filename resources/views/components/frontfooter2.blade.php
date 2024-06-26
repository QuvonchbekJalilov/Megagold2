<?php

use App\Models\Category;

$categories = Category::all();
?>
<footer class="main-footer style-two">
    <div class="anim-icons full-width">
        <span class="icon shape-9"></span>
        <span class="icon shape-10"></span>
    </div>
    <div class="widgets-section">
        <div class="auto-container">
            <div class="row">
                <div class="footer-column col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget about-widget">
                        <div class="logo"><a href="{{route('index')}}"><img src="/assets/images/logo-dark.png" style="width: 260px;" alt=""></a></div>
                        <p>{{__('words.footerAbout')}}</p>
                        <ul class="social-icon-six">
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-column col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget services-widget">
                        <h4 class="widget-title">{{__('words.category')}}</h4>
                        <ul class="user-links">
                            @foreach ( $categories as $category )
                            <li><a href="{{ route('products', ['product' => $category->id])}}">{{ $category['name_'.App::getLocale()]}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="footer-column col-xl-3  col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget links-widget">
                        <h4 class="widget-title">{{__('words.usefull')}} {{__('words.links')}}</h4>
                        <ul class="user-links">
                            <li><a href="{{ route('index')}}">{{__('words.home')}}</a></li>
                            <li><a href="{{ route('about')}}">{{__('words.about')}}</a></li>
                            <li><a href="{{ route('blog')}}">{{__('words.blog')}}</a></li>
                            <li><a href="{{ route('contact')}}">{{__('words.contact')}}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-column col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget address-widget">
                    <ul class="contact-info">
                        <h4 class="widget-title">{{__('words.contact')}}</h4>
                            <li><i class="fa fa-map-marker-alt"></i>Uzbekistan, Tashkent Bunyodkor </li>
                            <li><i class="fa fa-envelope"></i> <a href="mailto:info@megagold.uz"><span class="__cf_email__" data-cfemail="1e6d6b6e6e716c6a6d5e7c6b6d77737f66307d7173">info@megagold.uz</span></a>
                            </li>
                            <li><i class="fa fa-phone-square"></i> <a href="tel:+998998405555">+998 (99) 840 55 55</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="auto-container">
            <div class="inner-container">
                <div class="copyright-text">
                    <p>Copyright © 2024 <a href="https://dora.uz">Dora</a>. All Rights Reserved.</p>
                </div>

            </div>
        </div>
    </div>
</footer>