<?php
$lang = \Illuminate\Support\Facades\App::getLocale();
?>

<x-layouts.main>


    <section class="banner-section banner-section-five">
        <div class="banner-carousel-two owl-carousel owl-theme">

         @foreach($homes as $tm)
                <div class="slide-item">
                    <div class="auto-container">
                        <div class="row">
                            <div class="content-box col-xl-7 col-lg-8 col-md-12 col-sm-12 order-2 pe-lg-0">
                                <h1 class="title animate-2">{{$tm['title_'.$lang]}}</h1>
                                <div class="text animate-3">  {{$tm['short_content_' .$lang]}}
                                </div>
                                <div class="btn-box animate-4">
                                    <a href="{{route('contact')}}" class="theme-btn btn-style-two"><i class="icon fa fas fa-plus"></i><span class="btn-title">{{__('words.contact')}}
                                    </span></a>
                                    <a href="{{route('category')}}" class="theme-btn btn-style-two"><i class="icon fa fas fa-plus"></i><span class="btn-title">{{__('words.category')}}
                                        </span></a>
                                </div>
                            </div>
                            <div class="image-column col-xl-5 col-lg-4 col-md-12 col-sm-12 order-lg-2">
                                <div class="image-box">
                                    <figure class="image animate-4 animate-x"><img src="{{asset('storage/' . $tm->first_photo)}}" alt="">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
         @endforeach

        </div>
    </section>


    <section class="services-section-six">
        <div class="carousel-outer">
            <div class="swiper services-six-slider">
                <div class="swiper-wrapper">
                 @foreach($banners as $tm )
                        <div class="swiper-slide">

                            <div class="services-block-six">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image mb-0"><a href="page-service-details.html"><img src="{{asset('storage/' . $tm->photo)}}" alt=""></a></figure>
                                    </div>
                                    <div class="content-box">
                                        <div class="inner-box">
                                            <h3 class="title"><a href="page-service-details.html">{{$tm['title_'.$lang]}}</a>
                                            </h3>
                                            <div class="number">0{{ $loop->iteration }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                 @endforeach

                </div>
            </div>
        </div>
    </section>


    <section class="services-section-seven">
        <div class="anim-icons full-width">
            <span class="icon shape-14"></span>
            <span class="icon shape-15"></span>
        </div>
        <div class="auto-container">
            <div class="row">
                <div class="sec-title style-three col-xl-7">
                    <span class="sub-title">{{__('words.about')}}</span>
                    <h2>{{__('words.megagold')}}</h2>
                    <div class="text">{{__('words.megagold_about')}}</div>
                    <a href="{{route('contact')}}" class="theme-btn btn-style-two"><i
                            class="icon fa fas fa-plus"></i><span class="btn-title">{{__('words.contact')}}</span></a>
                </div>
                <div class="services-column col-xl-4 offset-xl-1">
                    <div class="inner-column">
                        <ul class="services-box">
                            <li><a href=""><i class="icon fa fa-arrow-right"></i>Transparent Pricing</a>
                            </li>
                            <li><a href=""><i class="icon fa fa-arrow-right"></i>Real-Time Tracking</a>
                            </li>
                            <li><a href=""><i class="icon fa fa-arrow-right"></i>Warehouse Storage</a>
                            </li>
                            <li><a href=""><i class="icon fa fa-arrow-right"></i>Security For Cargo</a>
                            </li>
                            <li><a href=""><i class="icon fa fa-arrow-right"></i>Easy Payment Methods</a>
                            </li>
                            <li><a href=""><i class="icon fa fa-arrow-right"></i>24/7 Hours Support</a>
                            </li>
                            <li><a href=""><i class="icon fa fa-arrow-right"></i>Fast & Efficient
                                    Delivery</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="services-section-eight">
        <div class="auto-container">
            <div class="row g-0">
                <div class="image-column col-lg-5">
                    <div class="inner-column">
                        <figure class="image mb-0 overlay-anim"><img src="/assets/images/resource/service6-1.jpg" alt="Image"></figure>
                    </div>
                </div>
                <div class="content-column col-lg-7">
                    <div class="bg-image" style="background-image: url(/assets/images/resource/service6-2.jpg);"></div>
                    <div class="inner-container">
                        <div class="sec-title style-three">
                            <span class="sub-title">{{__('words.serv_pac')}}</span>
                            <h2>{{__('words.what')}}</h2>
                            <h2>Nima uchun biz?</h2>

                        </div>
                        <div class="about-info">
                            <div class="icon-box">
                                <span class="number">01</span>
                                <i class="icon flaticon-logistics-delivery-6"></i>
                            </div>
                            <div class="content-box">
                                <h4 class="title">{{__('words.high')}}</h4>
                                <div class="text">
                                    {{__('words.high_desc')}}
                                </div>
                                <h4 class="title">Yuqori sifat:</h4>
                                <div class="text">Bizning barcha metall mahsulotlarimiz yuqori sifatli va xalqaro standartlarga mos ravishda ishlab chiqarilgan. Har bir mahsulotimiz kuchli, chidamli va uzoq muddat xizmat qiladi.</div>
                            </div>
                        </div>
                        <div class="about-info">
                            <div class="icon-box">
                                <span class="number">02</span>
                                <i class="icon flaticon-container-2"></i>
                            </div>
                            <div class="content-box">
                                <h4 class="title">{{__('words.high2')}}</h4>
                                <div class="text">
                                    {{__('words.high_desc2')}}
                                </div>

                                <h4 class="title">Keng assortiment:</h4>
                                <div class="text">Bizning katalogimizda turli o'lcham va shakllarda metall mahsulotlar mavjud. Bu sizga loyihangiz uchun eng mos keladigan materiallarni tanlash imkonini beradi.</div>
                            </div>
                        </div>
                        <div class="about-info">
                            <div class="icon-box">
                                <span class="number">03</span>
                                <i class="icon flaticon-3d-cube"></i>
                            </div>
                            <div class="content-box">
                                <h4 class="title">{{__('words.high3')}}</h4>
                                <div class="text">
                                    {{__('words.high_desc3')}}
                                </div>
                                <h4 class="title">Maxsus buyurtmalar:</h4>
                                <div class="text">Biz maxsus talablar asosida ishlab chiqarilgan metall mahsulotlarni taklif etamiz. Sizning texnik xususiyatlaringiz va o'lchamlaringiz bo'yicha buyurtmalarni qabul qilamiz.</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        .aaa img{
            border-radius: 50%;
        }
    </style>

    <section class="team-section-four">
        <div class="auto-container">
            <div class="sec-title style-three">
                <h2>{{__('words.our_team')}}</h2>
            </div>
            <div class="carousel-outer">
                <div class="swiper team-three-slider">
                    <div class="swiper-wrapper">
                        @foreach($teams  as $tm)
                            <div class="swiper-slide">
                                <div class="team-block-four">
                                    <div class="inner-box">
                                        <div class="image-box aaa">
                                            <figure class="image"><a href="page-team-details.html"><img src="{{asset('storage/'. $tm->photo)}}" alt="" ></a></figure>
                                        </div>
                                        <div class="info-box">
                                            <span class="designation">{{$tm['title_'.$lang]}}</span>
                                            <h4 class="name"><a href="page-team-details.html">{{$tm->name}}</a></h4>
                                            <ul class="social-icon">
                                                <li><a href="{{$tm->twitter}}"><i class="fab fa-telegram"></i></a></li>
                                                <li><a href="{{$tm->facebook}}"><i class="fab fa-facebook"></i></a></li>
                                                <li><a href="{{$tm->twitter}}"><i class="fab fa-twitter"></i></a></li>

                                                <li><a href="#"><img src="/assets/images/icons/icon-6.png" alt="index.html"></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>

                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>


    <section class="about-section-six">
        <div class="auto-container">
            <div class="row">

                <div class="image-column col-lg-6">
                    <div class="inner-column">
                        <div class="image-box">
                            <figure class="image-1 mb-0 overlay-anim"><img src="/assets/images/resource/about-6.jpg" alt="Image"></figure>
                            <figure class="image-2 mb-0 overlay-anim"><img src="/assets/images/resource/about-7.jpg" alt="Image"></figure>
                        </div>
                    </div>
                </div>

                <div class="counter-column col-lg-6">
                    <div class="inner-column">

                        <div class="services-block">
                            <div class="inner-block">
                                <div class="sec-title style-three mb-0">
                                    <span class="sub-title">{{__('words.serv_pac2')}}</span>
                                    <h2>{{__('words.our_customers')}}</h2>
                                    <div class="text">
                                        {{__('words.customers_desc')}}
                                    </div>
                                </div>

                                <div class="skills">

                                    <div class="skill-item">
                                        <div class="skill-header">
                                            <h6 class="skill-title">{{__('words.rang_txt1')}}</h6>
                                        </div>
                                        <div class="skill-bar">
                                            <div class="bar-inner">
                                                <div class="bar progress-line" data-width="92">
                                                    <div class="skill-percentage">
                                                        <div class="count-box"><span class="count-text" data-speed="3000" data-stop="92">0</span>%</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="skill-item">
                                        <div class="skill-header">
                                            <h6 class="skill-title">{{__('words.rang_txt2')}}</h6>
                                        </div>
                                        <div class="skill-bar">
                                            <div class="bar-inner">
                                                <div class="bar progress-line" data-width="88">
                                                    <div class="skill-percentage">
                                                        <div class="count-box"><span class="count-text" data-speed="3000" data-stop="92">0</span>%</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="skill-item">
                                        <div class="skill-header">
                                            <h6 class="skill-title">{{__('words.rang_txt3')}}</h6>
                                        </div>
                                        <div class="skill-bar">
                                            <div class="bar-inner">
                                                <div class="bar progress-line" data-width="82">
                                                    <div class="skill-percentage">
                                                        <div class="count-box"><span class="count-text" data-speed="3000" data-stop="92">0</span>%</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="skill-item">
                                        <div class="skill-header">
                                            <h6 class="skill-title">{{__('words.rang_txt4')}}</h6>
                                        </div>
                                        <div class="skill-bar">
                                            <div class="bar-inner">
                                                <div class="bar progress-line" data-width="76">
                                                    <div class="skill-percentage">
                                                        <div class="count-box"><span class="count-text" data-speed="3000" data-stop="92">0</span>%</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="services-block mb-0">
                            <div class="inner-block">
                                <div class="sec-title style-three mb-0">
                                    <span class="sub-title">{{__('words.serv_pac22')}}</span>
                                    <h2>{{__('words.our_values')}}</h2>
                                    <div class="text">{{__('words.our_values_desc')}}</div>
                                </div>
                                <div class="row">
                                    <ul class="list-style-two style-two col-sm-6">
                                        <li>{{__('words.radio_txt1')}}</li>
                                        <li>{{__('words.radio_txt2')}}</li>
                                        <li>{{__('words.radio_txt3')}}</li>
                                    </ul>
                                    <ul class="list-style-two style-two col-sm-6">
                                        <li>{{__('words.radio_txt4')}}</li>
                                        <li>{{__('words.radio_txt5')}}</li>
                                        <li>{{__('words.radio_txt6')}}</li>
                                    </ul>
                                </div>
                                <a href="page-contact.html" class="theme-btn btn-style-two"><i class="icon fa fas fa-plus"></i><span class="btn-title">Request A
                                        Quote</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="project-section-four">
        <div class="anim-icons full-width">
            <span class="icon shape-16"></span>
            <span class="icon shape-17"></span>
        </div>
        <div class="sec-title style-three light text-center">

            <h2>{{__('words.category')}}</h2>
        </div>
        <div class="auto-container">
            <ul class="project-block-four">
                @foreach($categories as $tm)
                    <li class="inner-box">
                        <div class="row align-items-center">
                            <div class="top-box col-md-1">
                                <div class="number">0{{ $loop->iteration }}</div>
                            </div>
                            <div class="center-box col-md-10">
                                <h4 class="title">{{ $tm['name_'.$lang]}}</h4>
                                <figure class="image mb-0"><img src="{{ asset('storage/' . $tm->photo) }}" alt="Image" width="150px">
                                </figure>
                            </div>
                            <div class="bottom-box col-md-1">
                                <a href="{{ route('products', ['product'=> $tm->id])}}" class="theme-btn btn-style-three dark-bg"><i class="icon fa fas fa-plus"></i><span class="btn-title"></span></a>
                            </div>
                        </div>
                    </li>
                @endforeach

            </ul>
        </div>
    </section>


    <section class="project-section-five">
        <div class="outer-box">
            <div class="auto-container">
                <div class="sec-title style-three light">
                    <span class="sub-title">Project We Done</span>
                    <h2>Let’s View Our Latest Projects</h2>
                </div>
                <div class="carousel-outer">

                    <div class="swiper project-three-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">

                                <div class="project-block-five">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image mb-0"><a href="page-project-details.html"><img src="/assets/images/resource/project-5.jpg" alt=""></a></figure>
                                        </div>
                                        <div class="content-box">
                                            <h4 class="title"><a href="page-project-details.html">Exclusive Cargo
                                                    Shipping</a></h4>
                                            <div class="text">Lorem ipsum dolor samet consectetur adipiscing elit,
                                                nec dapibus tristique egestas felis justo, nunc eros cubilia cras
                                                facilisi curabitur posuere massa varius.</div>
                                            <a href="page-project-details.html" class="theme-btn btn-style-two"><i class="icon fa fas fa-plus"></i><span class="btn-title">View
                                                    Details</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">

                                <div class="project-block-five">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image mb-0"><a href="page-project-details.html"><img src="/assets/images/resource/project-5.jpg" alt=""></a></figure>
                                        </div>
                                        <div class="content-box">
                                            <h4 class="title"><a href="page-project-details.html">Exclusive Cargo
                                                    Shipping</a></h4>
                                            <div class="text">Lorem ipsum dolor samet consectetur adipiscing elit,
                                                nec dapibus tristique egestas felis justo, nunc eros cubilia cras
                                                facilisi curabitur posuere massa varius.</div>
                                            <a href="page-project-details.html" class="theme-btn btn-style-two"><i class="icon fa fas fa-plus"></i><span class="btn-title">View
                                                    Details</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">

                                <div class="project-block-five">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image mb-0"><a href="page-project-details.html"><img src="/assets/images/resource/project-5.jpg" alt=""></a></figure>
                                        </div>
                                        <div class="content-box">
                                            <h4 class="title"><a href="page-project-details.html">Exclusive Cargo
                                                    Shipping</a></h4>
                                            <div class="text">Lorem ipsum dolor samet consectetur adipiscing elit,
                                                nec dapibus tristique egestas felis justo, nunc eros cubilia cras
                                                facilisi curabitur posuere massa varius.</div>
                                            <a href="page-project-details.html" class="theme-btn btn-style-two"><i class="icon fa fas fa-plus"></i><span class="btn-title">View
                                                    Details</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">

                                <div class="project-block-five">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image mb-0"><a href="page-project-details.html"><img src="/assets/images/resource/project-5.jpg" alt=""></a></figure>
                                        </div>
                                        <div class="content-box">
                                            <h4 class="title"><a href="page-project-details.html">Exclusive Cargo
                                                    Shipping</a></h4>
                                            <div class="text">Lorem ipsum dolor samet consectetur adipiscing elit,
                                                nec dapibus tristique egestas felis justo, nunc eros cubilia cras
                                                facilisi curabitur posuere massa varius.</div>
                                            <a href="page-project-details.html" class="theme-btn btn-style-two"><i class="icon fa fas fa-plus"></i><span class="btn-title">View
                                                    Details</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">

                                <div class="project-block-five">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image mb-0"><a href="page-project-details.html"><img src="/assets/images/resource/project-5.jpg" alt=""></a></figure>
                                        </div>
                                        <div class="content-box">
                                            <h4 class="title"><a href="page-project-details.html">Exclusive Cargo
                                                    Shipping</a></h4>
                                            <div class="text">Lorem ipsum dolor samet consectetur adipiscing elit,
                                                nec dapibus tristique egestas felis justo, nunc eros cubilia cras
                                                facilisi curabitur posuere massa varius.</div>
                                            <a href="page-project-details.html" class="theme-btn btn-style-two"><i class="icon fa fas fa-plus"></i><span class="btn-title">View
                                                    Details</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">

                                <div class="project-block-five">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image mb-0"><a href="page-project-details.html"><img src="/assets/images/resource/project-5.jpg" alt=""></a></figure>
                                        </div>
                                        <div class="content-box">
                                            <h4 class="title"><a href="page-project-details.html">Exclusive Cargo
                                                    Shipping</a></h4>
                                            <div class="text">Lorem ipsum dolor samet consectetur adipiscing elit,
                                                nec dapibus tristique egestas felis justo, nunc eros cubilia cras
                                                facilisi curabitur posuere massa varius.</div>
                                            <a href="page-project-details.html" class="theme-btn btn-style-two"><i class="icon fa fas fa-plus"></i><span class="btn-title">View
                                                    Details</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
    </section>


    <div class="video-section-two">
        <div class="anim-icons full-width">
            <span class="icon shape-22 bounce-x"></span>
        </div>
        <div class="auto-container">
            <div class="row align-items-end">
                <div class="content-column col-xl-5 order-2">
                    <div class="sec-title style-three">
                        <span class="sub-title">Service Package</span>
                        <h2>Why You Should <br>Choose Us?</h2>
                        <div class="text">There are many variations of passages of Lorem <br>Ipsum available, but
                            the majority have suffered <br>alteration in some form.</div>
                    </div>
                    <ul class="list-style-two">
                        <li>Emergency mechanical business solutions</li>
                        <li>Top quality services with reasonable price</li>
                        <li>Reliable & experienced contractors</li>
                    </ul>
                </div>
                <div class="image-column col-xl-7 order-xl-2">
                    <div class="inner-column">
                        <figure class="image mb-0"><img src="/assets/images/background/7.jpg" alt="Image"></figure>
                        <div class="video-box">
                            <div class="btn-box">
                                <a href="https://www.youtube.com/watch?v=Fvae8nxzVz4" class="play-now lightbox-image" data-fancybox="gallery" data-caption="">
                                    <i class="icon fa fa-play" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <div class="experience">
                            <div class="inner">
                                <i class="icon flaticon-team"></i>
                                <h5 title="title">Dedicated <br>Customer <br>Teams</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="news-section-four">
        <div class="auto-container">
            <div class="sec-title style-three text-center wow fadeInUp">
                <span class="sub-title">Service Package</span>
                <h2>Latest Blog Updates</h2>
            </div>
            <div class="row">
                @foreach ($blogs as $blog)
                <div class="news-block-two col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="news-details.html"><img src="/storage/{{$blog->photo}}" alt="rasm"></a></figure>
                        </div>
                        <div class="content-box">
                            <ul class="post-info">
                                <li>{{ $blog->created_at->format('M d, Y')}}</li>
                                <li>{{ $blog['title_'.$lang]}}</li>
                            </ul>
                            <h4 class="title"> <a href="{{ route('single_blog', ['blog' => $blog->id]) }}">
                                    {{ $blog['description_'.$lang] }}</a></h4>
                            <a href="{{ route('single_blog', ['blog' => $blog->id])}}" class="theme-btn btn-style-two"><i class="icon fa fas fa-plus"></i><span class="btn-title">Learn More</span></a>
                        </div>
                    </div>
                </div>
                @endforeach





            </div>
    </section>


    <section class="work-section-three pb-0">
        <div class="auto-container">

            <div class="work-block-three">
                <div class="bg-image" style="background-image: url(/assets/images/background/4.jpg);"></div>
                <div class="inner-box">
                    <div class="sec-title style-three light mb-0">
                        <h2>Let us work together to make a difference</h2>
                        <div class="text">Vehicula sed habitasse phasellus fames suscipit ulputate venenatis </div>
                    </div>
                    <a href="page-contact.html" class="theme-btn btn-style-two hvr-light"><i class="icon fa fas fa-plus"></i><span class="btn-title">Request A Quote</span></a>
                </div>
            </div>
        </div>
    </section>
</x-layouts.main>
