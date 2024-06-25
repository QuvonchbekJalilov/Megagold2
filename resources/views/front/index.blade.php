<?php
$lang = \Illuminate\Support\Facades\App::getLocale()
?>

<x-layouts.main>
    <!-- mobile menu -->
    <div class="fix">
        <div class="side-info">
            <button class="side-info-close"><i class="fal fa-times"></i></button>
            <div class="side__logo mb-25">
                <a href="/">
                    <img src="/assets/img/MegaGoldMetall2-01.png" alt="logo" />
                </a>
            </div>
            <div class="mobile-menu"></div>
            <div class="language-selector mt-30 mb-30">
                <h4>Select Language</h4>
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
                        @foreach($contacts as $contact)
                            <li><i class="far fa-location"></i><a href="mailto:info@webmail.com">
                                    Bunyodkor shox ko'chasi 2-uy
                                </a>
                            </li>
                            <li><i class="far fa-clock"></i><a href="mailto:info@webmail.com">
                                    Murojat qilish vaqti 08:00 - 20:00
                                </a>
                            </li>
                            <li><i class="far fa-phone"></i><a href="mailto:info@webmail.com">
                                    {{ $contact->phone_number }}
                                </a>
                            </li>
                            <li><i class="far fa-envelope"></i><a href="mailto:info@webmail.com">
                                    {{ $contact->email }}
                                </a>
                            </li>
                        @endforeach
                    </ul>

                </div>
            </div>

        </div>
    </div>
    <div class="offcanvas-overlay"></div>
    <!-- slide area start  -->
    <div class="slide_area">
        <div class="slide_shape">
            <img class="shape_01 position-absolute" src="./assets/img/slide/sl-1.png" alt="shape_01">
            <img class="shape_02 position-absolute" src="./assets/img/slide/sl-2.png" alt="shape_02">
            <img class="shape_03 position-absolute" src="./assets/img/slide/sl-3.png" alt="shape_03">
            <img class="shape_04 position-absolute" src="./assets/img/slide/sl-4.png" alt="shape_04">
            <img class="shape_05 position-absolute" src="./assets/img/slide/sl-5.png" alt="shape_05">
            <img class="shape_06 position-absolute" src="./assets/img/slide/sl-6.png" alt="shape_06">
            <img class="shape_07 position-absolute" src="./assets/img/slide/sl-7.png" alt="shape_07">
            <img class="shape_09 position-absolute" src="./assets/img/slide/face.png" alt="shape_07">
            <img class="shape_10 position-absolute" src="./assets/img/shapes/header_left.png" alt="shape_10">
            <img class="shape_11 position-absolute" src="./assets/img/shapes/header_middle.png" alt="shape_11">
            <img class="shape_12 position-absolute" src="./assets/img/shapes/slider_under.png" alt="shape_11">
            <img class="shape_13 position-absolute" src="./assets/img/shapes/slider_right.png" alt="shape_11">
        </div>
        <div class="custom-width">
            <div class="row">
                <div class="col-sm-12">
                    <div class="slide_img beforelsiee xlnone d-xl-none">
                        @foreach($homes as $home)
                        <img src="{{ asset('storage/' . $home->first_photo) }}" class="img-1" alt="slide_shape_01">
                        <img src="{{ asset('storage/' . $home->second_photo) }}" class="img-2 position-absolute" alt="slide_shape_02">
                        <img src="{{ asset('storage/' . $home->third_photo) }}" class="img-3 position-absolute" alt="slide_shape_03">
                        <img src="{{ asset('storage/' . $home->fourth_photo) }}" class="img-4 position-absolute" alt="slide_shape_04">
                        <img src="{{ asset('storage/' . $home->fifth_photo) }}" class="img-5 position-absolute" alt="slide_image">
                        @endforeach
                    </div>
                </div>
                <div class="col-md-12 col-lg-8 col-xl-6">
                    <div class="slide_content">
                        <h4 class="animated wow animate__fadeIn" data-animation="fadeInUp" data-delay="2s" data-wow-duration="2s">{{__('words.metal')}}
                            <span>{{__('words.company')}}</span>
                        </h4>
                        @foreach($homes as $home)
                        <h2 class="wow animate__fadeIn" data-animation="fadeInUp" data-delay="2.5s" data-wow-duration="2.5s">{{ $home['title_' . $lang] }}</h2>
                        <p class="wow animate__fadeIn" data-animation="fadeInUp" data-delay="3s" data-wow-duration="3s">
                            {{ $home['short_content_' . $lang] }}
                        </p>
                        @endforeach
                        <div class="site_button site_button-two">
                            <a class="cmn_btn slide_btn slide_btn_01 " href="{{ route('product')}}">{{__('words.product')}}<i class="fas fa-chevron-right"></i></a>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="col-md-12 col-lg-4 col-xl-5 offset-xl-1 text-end">
                    <div class="slide_img beforelsiee DisplayNone">
                        <span class="circle-shape-design"></span>
                        @foreach($homes as $home)
                        <img src="{{ asset('storage/' . $home->first_photo) }}" class="img-1" alt="slide_shape_01">
                        <img src="{{ asset('storage/' . $home->second_photo) }}" class="img-2 position-absolute" alt="slide_shape_02">
                        <img src="{{ asset('storage/' . $home->third_photo) }}" class="img-3 position-absolute" alt="slide_shape_03">
                        <img src="{{ asset('storage/' . $home->fourth_photo) }}" class="img-4 position-absolute" alt="slide_shape_04">
                        <img src="{{ asset('storage/' . $home->fifth_photo) }}" class="img-5 position-absolute" alt="slide_image">
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slide area end  -->
    <!-- about us area start  -->
    <div class="about_area custom_animation mb-0">
        <div class="about_shapes">
            <img src="/assets/img/shapes/about.png" class="position-absolute about_o1" alt="aboutShapes">
            <img src="/assets/img/shapes/about2image.png" class="position-absolute about_o2" alt="aboutShapes">
            <img src="/assets/img/shapes/aboutoneimage.png" class="position-absolute about_o3" alt="aboutShapes">
            <img src="/assets/img/about/ss.png" class="position-absolute about_4" alt="aboutShapes">
        </div>
        <div class="custom-width">
            @foreach($abouts as $about)
            <div class="row">
                <div class="col-md-12 col-lg-7">
                    <div class="about_images scroll_01">
                        <div class="about_image_1">
                            <img class="about_shape_one" src="/assets/img/about/about_since.png" alt="about_shape_01">
                            <img class="about_shape_three" src="/assets/img/about/about_shape_2.png" alt="about_image_01">
                        </div>
                        <div class="about_img_2">
                            <img class="about_img_two" src="{{ asset( 'storage/' . $about->photo ) }}" style="widht:79%;" alt="about_image_02">
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-5">
                    <div class="wrap_about">
                        <div class="section_wrapper aboutwraper">
                            <h4 class="sub_title wow animate__flipInX" data-animation="fadeInUp" data-delay="1s">
                                {{__('words.about')}}
                            </h4>
                            <h2 class="title wow animate__bounceIn" data-animation="fadeInUp" data-delay="1.5s">
                                {{ $about['title_' . $lang] }}
                            </h2>
                        </div>
                        <div class="about_content">
                            <h3>{{ $about['short_content_' . $lang] }}</h3>
                            <p> {{ $about['content_' . $lang] }}
                            </p>
                            <div class="site_button">
                                <a class="cmn_btn cmn_outline " href="{{ route('about')}}"><span>{{__('words.read')}}</span> <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- about us area end  -->
    <!-- .services area start  -->
    <div class="service_area custom_animation mb-120 mobile-res-mb">
        <div class="service_shapes">
            <img src="./assets/img/shapes/service_right.png" class="position-absolute service_01" alt="service_shapes">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section_wrapper service_wraper mb-40">
                        <h4 class="sub_title wow animate__flipInXx" data-animation="fadeInUp" data-delay="1s">{{ __('words.our')}}
                            {{__('words.product')}}
                        </h4>
                        <h2 class="title wow animate__bounceInn" data-animation="fadeInUp" data-delay="1.5s">{{__('words.product')}}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="service_activition">
                        @foreach ($categories as $category)
                        <div class="service_card">
                            <div class="service_img text-center">
                                <img src="{{ asset('storage/' . $category->photo) }}" style="width:190px !important;" alt="service_img">
                            </div>
                            <div class="service_content text-center">
                                <h3 class="service_title">{{ $category['name_'.$lang]}}</h3>
                            </div>
                            <a class="radius_btn effectPlus" href="{{ route('products', ['product'=> $category->id]) }}">
                                <i class="icon-serviceicon"></i>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .services area end  -->
    <!-- idea area start  -->
    <div class="idea_area mb-120 mobile-res-mb">
        <div class="container">
            <div class="bg_idea">
                <img class="idea_area_01" src="./assets/img/preview/idea2.png" alt="">
                <img class="idea_area_02" src="./assets/img/preview/idea3.png" alt="">
                <img class="idea_area_03" src="./assets/img/preview/idea4.png" alt="">
                <img class="idea_area_04" src="./assets/img/preview/idea5.png" alt="">
                <img class="idea_area_05" src="./assets/img/preview/idea_1.png" alt="">
                <img class="position-absolute idea_area_06" src="./assets/img/shapes/calltoAction.png" alt="">
                @foreach($contacts as $contact)
                <div class="row">
    <div class="col-lg-6" style="margin-top:27px;">
        <div class="idea_title">
            <h2 class="idea_heading">{{ $contact['title_' . $lang] }}</h2>
        </div>
    </div>
    <div class="col-lg-6 d-flex align-items-center">
        <div class="dial">
            <a href="tel:{{ $contact->phone_number}}" class="dial_call">

                <h2 class="text-white bold"> 
                    <span class="bgwhite">
                        <i class="fal fa-phone"></i>
                    </span>
                    {{ $contact->phone_number }}
                </h2>
            </a>
        </div>
    </div>
</div>

                @endforeach
            </div>
        </div>
    </div>
    <!-- idea area end  -->
    <!-- shoot area start  -->
    <div class="shoot_area mobile-res-mb">
        <div class="shoot_shapes">
            <img class="shoot_shapes_04" src="./assets/img/video/vd1.png" alt="">
            <img class="shoot_shapes_05" src="./assets/img/video/vd2.png" alt="">
            <img class="shoot_shapes_06" src="./assets/img/video/largpoly.png" alt="">
            <img class="shoot_shapes_07" src="./assets/img/video/vdshape.png" alt="">
        </div>
        <div class="container">
            <div class="row custom-center">
                <div class="col-xl-8">
                    <div class="shoot_box">
                        <div class="vd-grid">
                            @foreach($links as $link)
                            @if($link->link)
                            {!! $link->link !!}
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    @foreach($actives as $active)
                    <div class="shoot_card before_shoot_01 wow animate__fadeIn" data-animation="fadeInUp" data-delay="2.5s" data-wow-duration="1s">
                        <div class="shoot_icon">
                            <img src="./assets/img/video/vd-or-2.png" alt="">
                            <h5>{{__('words.trustClient')}}</h5>
                        </div>
                        <div class="shoot_count_1">
                            <h2>{{ $active->active_client }}+</h2>
                        </div>
                    </div>
                    <div class="shoot_card before_shoot_02 wow animate__fadeIn" data-animation="fadeInUp" data-delay="2.5s" data-wow-duration="2s">
                        <div class="shoot_icon">
                            <img src="./assets/img/video/ach-icon2.png" alt="">
                            <h5>{{__('words.expStaff')}}</h5>
                        </div>
                        <div class="shoot_count_2">
                            <h2>{{ $active->experienced }}+</h2>
                        </div>
                    </div>
                    <div class="shoot_card before_shoot_03 wow animate__fadeIn" data-animation="fadeInUp" data-delay="2.5s" data-wow-duration="3s">
                        <div class="shoot_icon">
                            <img src="./assets/img/video/vd-or-1.png" alt="">
                            <h5>{{__('words.yService')}}</h5>
                        </div>
                        <div class="shoot_count_3">
                            <h2>{{ $active->years_services }}+</h2>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- shoot area end  -->
    
    <!-- clients area start  -->
    <div class="clients_area mb-120 mobile-res-mb">
        <div class="clients_shapes">
            <img src="./assets/img/testimonial/test_01.png" class="clients_01 position-absolute" alt="">
            <img src="./assets/img/testimonial/test_02.png" class="clients_02 position-absolute" alt="">
            <img src="./assets/img/testimonial/test_03.png" class="clients_03 position-absolute" alt="">
            <img src="./assets/img/testimonial/test_04.png" class="clients_04 position-absolute" alt="">
            <img src="./assets/img/testimonial/test_05.png" class="clients_05 position-absolute" alt="">
            <img src="./assets/img/testimonial/test_06.png" class="clients_06 position-absolute" alt="">
            <img src="./assets/img/testimonial/test_07.png" class="clients_07 position-absolute" alt="">
            <img src="./assets/img/testimonial/test_08.png" class="clients_08 position-absolute" alt="">
            <img src="./assets/img/testimonial/test-bottom-right.png" class="clients_09 position-absolute" alt="">
            <img src="./assets/img/testimonial/bottom-left-one.png" class="clients_10 position-absolute" alt="">
            <img src="./assets/img/testimonial/bottom-right-one.png" class="clients_11 position-absolute" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section_wrapper text-center mb-10">
                        <h4 class="sub_title wow animate__fadeIn" data-animation="fadeInUp" data-delay="2s" data-wow-duration="3s">{{__('words.clients')}} {{__('words.feedback')}}</h4>
                        <h2 class="title wow animate__fadeIn" data-animation="fadeInUp" data-delay="2s" data-wow-duration="2.5s">{{__('words.clients')}} {{__('words.feedback')}}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="testimonial-active dot-style">
                    @foreach($commits as $commit)
                    <div class="col-md-4">
                        <div class="testimonial_wrapper wow animate__fadeIn" data-animation="fadeInUp" data-delay="2s" data-wow-duration="3s">
                            <div class="testtimonial_content">
                                <div class="testimonial_star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4>awesome work</h4>
                                <p>{{ $commit['title_'. $lang] }}</p>
                            </div>
                            <div class="rows">
                                <div class="client_info client_info-one d-flex">
                                    <div class="client_img">
                                        <img src="{{ asset('storage/' . $commit->photo) }}" alt="author_info" style="width: 70px;height: 70px;border-radius: 50%">
                                    </div>
                                    <div class="client_meta">
                                        <h4>{{ $commit->name }}</h4>
                                        <p>company of client</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- clients area end  -->
    <!-- pricing area start  -->
    <div class="pricing_area mb-120 mobile-res-mb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section_wrapper section_wrapper_mobile text-center mb-60">
                        <h4 class="sub_title wow animate__fadeIn" data-animation="fadeInUp" data-delay="2s" data-wow-duration="3s">{{__('words.our')}} {{__('words.product')}}</h4>
                        <h2 class="title wow animate__fadeIn" data-animation="fadeInUp" data-delay="2.5s" data-wow-duration="3s">{{__('words.popular')}} {{__('words.product')}}</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                @foreach($popular_products as $popular)
                <div class="col-md-12">
                    <div class="single_price d-flex wow animate__fadeIn" data-animation="fadeInUp" data-delay="3s" data-wow-duration="3s">
                        <div class="price_img">
                            <img src="{{ asset('storage/' . $popular->category->photo) }}" alt="" style="width: 150px;height: 150px;">

                        </div>
                        <div class="price_content">
                            <h4>{{ $popular['name_' . $lang] }}</h4>
                            <p>{{ $popular['short_content_' . $lang] }}</p>
                        </div>
                        <div class="choose_plan">
                            <a class="cmn_btn  increase_width   cmn_outline  effect" href="{{route('products',['product'=>$popular->id])}}"><span>{{__('words.choose')}}</span><i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- pricing area end  -->
    <!-- brand partner area start  -->
    <div class="brand_area mb-110 mobile-res-mb">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-12">
                    <div class="section_wrapper text-center mb-40">
                        <h4 class="sub_title wow animate__fadeIn" data-animation="fadeInUp" data-delay="2s" data-wow-duration="3s">{{__('words.clients')}}</h4>
                        <h2 class="title wow animate__fadeIn" data-animation="fadeInUp" data-delay="2.5s" data-wow-duration="3s">{{__('words.our')}} {{__('words.clients')}}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="brand_img d-flex">
                        @foreach ($clients as $client )
                        <div class="brand_items">
                            <img src="/storage/{{ $client->photo}}" alt="brand_image" style="height:140 !important; width:140px; ">
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- brand partner area end  -->

    <!-- news area start  -->
    <div class="news_area mobile-res-mb">
        <div class="blog_shape">
            <img src="/assets/img/blog/patternblog.png" class="blog_pattern" alt="">
            <img src="/assets/img/blog/blog-shape.png" class="blog_circle_shpae position-absolute" alt="">
        </div>
        <div class="container">
            <div class="row">
                @foreach($blog_text as $text)
                <div class="col-md-12 col-lg-5">
                    <div class="section_wrapper news-wrapper">
                        <h4 class="sub_title wow animate__fadeIn" data-animation="fadeInUp" data-delay="2s" data-wow-duration="2s">{{ $text['title_' . $lang] }}</h4>
                        <h2 class="title wow animate__fadeIn" data-animation="fadeInUp" data-delay="2.5s" data-wow-duration="2s">{{ $text['short_content_' . $lang] }}</h2>
                        <p>{{ $text['content_' . $lang] }}</p>
                        <div class="blog-buttons">
                            <span class="prev b-arrow-01"></span>
                            <span class="next b-arrow-02"></span>
                        </div>

                    </div>
                </div>
                @endforeach
                <div class="col-md-12 col-lg-7">
                    <div class="row blog_activition_first_photo_one">
                        @foreach($blogs as $blog)
                        <div class="col-md-6">
                            <div class="blog_activition">
                                <div class="blog">
                                    <div class="blog_image">
                                        <img src="{{ asset('storage/' . $blog->photo) }}" alt="blog_image">
                                        <div class="blog_content">
                                            <div class="meta_content d-flex">
                                                <span>By : Admin</span>
                                                @if ($blog->created_at)
                                                <span>{{ $blog->created_at->format('F j Y') }}</span>
                                                @else
                                                <span>{{ __('No date available') }}</span>
                                                @endif
                                            </div>
                                            <h4><a href="/blog">{{ $blog['description_' . $lang] }}</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- news area end  -->
    <!-- subscribe area start  -->
    <div class="subscribe_area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="subscribe_card">
                        {{-- Contact form start --}}

    <!-- Contact 3 - Bootstrap Brain Component -->
    <section >
        <div class="container">
            <div class="row gy-3 gy-md-4 gy-lg-0 align-items-md-center">
                <div class="col-12 col-lg-6">
                    <div class="row justify-content-xl-center">
                        <div class="col-12 col-xl-11">
                            <h2 class="h1 mb-3">{{__('words.getTouch')}}</h2>
                            <p class="lead fs-4 text-secondary mb-5">{{__('words.connect')}}</p>
                            <div class="d-flex mb-5">
                                <div class="me-4 text-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-geo" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6zM4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="mb-3">{{__('words.address')}}</h4>
                                    <address class="mb-0 text-secondary">8014 Edith Blvd NE, Albuquerque, New York, United States</address>
                                </div>
                            </div>
                            @foreach ( $contacts as $contact)
                            <div class="row mb-5">
                                <div class="col-12 col-sm-6">
                                    <div class="d-flex mb-5 mb-sm-0">
                                        <div class="me-4 text-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-telephone-outbound" viewBox="0 0 16 16">
                                                <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM11 .5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-4.146 4.147a.5.5 0 0 1-.708-.708L14.293 1H11.5a.5.5 0 0 1-.5-.5z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="mb-3">{{__('words.phone')}}</h4>
                                            <p class="mb-0">
                                                <a class="link-secondary text-decoration-none" href="tel:{{$contact->phone_number}}">{{$contact->phone_number}}</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="d-flex mb-0">
                                        <div class="me-4 text-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-envelope-at" viewBox="0 0 16 16">
                                                <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z" />
                                                <path d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648Zm-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="mb-3">{{__('words.email')}}</h4>
                                            <p class="mb-0">
                                                <a class="link-secondary text-decoration-none" href="mailto:{{$contact->email}}">{{$contact->email}}</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                            <div class="d-flex">
                                <div class="me-4 text-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-alarm" viewBox="0 0 16 16">
                                        <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z" />
                                        <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="mb-3">{{__('words.timeTable')}}</h4>
                                    <div class="d-flex mb-1">
                                        <p class="text-secondary fw-bold mb-0 me-5">{{__('words.MonFri')}}</p>
                                        <p class="text-secondary mb-0">9:00 am - 5:00 pm</p>
                                    </div>
                                    <div class="d-flex">
                                        <p class="text-secondary fw-bold mb-0 me-5">{{__('words.SatSun')}}</p>
                                        <p class="text-secondary mb-0">9:00 am - 2:00 pm</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="bg-white border rounded shadow-sm overflow-hidden">

                        <form action="#!">
                            <div class="row gy-4 gy-xl-5 p-4 p-xl-5">
                                <div class="col-12">
                                    <label for="full_name" class="form-label">{{__('words.fullName')}} <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="full_name" name="full_name" value="" placeholder="{{__('words.placeholderName')}}" required>
                                </div>
                                
                                <div class="col-12">
                                    <label for="phone_number_con" class="form-label">{{__('words.phone')}}</label>
                                    <div class="input-group">
                                        
                                        <input type="tel" class="form-control" id="phone_number_con" name="phone_number_con" value="+998">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="send_message" class="form-label">{{__('words.message')}} <span class="text-danger">*</span></label>
                                    <textarea class="form-control" id="send_message" name="send_message" rows="3"  required></textarea>
                                </div>
                                <div class="col-12">
                                    <div class="d-grid">
                                        <button class="btn btn-primary btn-lg" onclick="send()" type="submit">{{__('words.send')}}</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        function send() {
            const phone_number_con = document.getElementById('phone_number_con').value;
            const full_name = document.getElementById('full_name').value;
            
            const send_message = document.getElementById('send_message').value;

            if (!full_name || !phone_number_con || !email || !send_message) {
                alert('Iltimos, barcha maydonlarni to\'ldiring.');
                return;
            }

            const message = `Habaringiz Yuborildi:\n\nIsm: ${full_name}\nTelefon Raqam: ${phone_number_con}\nXabar ${send_message}`;
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
                        document.getElementById('full_name').value = '';
                        document.getElementById('phone_number_con').value = '';
                        document.getElementById('send_message').value = '';
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


    {{-- Contact from end --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- subscribe area end  -->
    <!-- footer area start  -->
    <div class="footer_area pt-120 pb-50">
        <div class="footer_shape">
            <img src="./assets/img/footer/footerPattern.png" class="f-shape_one" alt="">
            <img src="./assets/img/footer/polygonFooter.png" class="f-shape_two" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-6 col-xl-5 col-sm-7 ">
                    <div class="footer_widget">
                        <h4>{{ __('words.about')}}</h4>
                        <p>{{ __('words.footerAbout') }}</p>
                        <div class="social_contact">
                            @foreach($contacts as $contact)
                            <a href="{{ $contact->email }}"><svg width="20.87" height="15">
                                    <g id="Mail_2" data-name="Mail 2" transform="translate(-163.667 -153.91)">
                                        <path id="dfdf" data-name="Path 22" d="M181.928,153.91H166.276a2.611,2.611,0,0,0-2.609,2.609V166.3a2.611,2.611,0,0,0,2.609,2.609h15.652a2.612,2.612,0,0,0,2.609-2.609v-9.783A2.612,2.612,0,0,0,181.928,153.91Zm1.3,12.391a1.306,1.306,0,0,1-1.3,1.3H166.276a1.306,1.306,0,0,1-1.3-1.3v-9.783a1.306,1.306,0,0,1,1.3-1.3h15.652a1.306,1.306,0,0,1,1.3,1.3Z" fill="#438ff9" />
                                        <path id="dfdeyyf" data-name="Path 23" d="M183.172,159.149a.653.653,0,0,0-.918-.092l-6.76,5.532-6.761-5.532a.652.652,0,0,0-.826,1.01l7.174,5.87a.653.653,0,0,0,.826,0l7.174-5.87A.653.653,0,0,0,183.172,159.149Z" transform="translate(-1.391 -1.739)" fill="#438ff9" />
                                        <path id="sdfs" data-name="Path 24" d="M186.78,167.1a.652.652,0,1,0-.922.922l2.609,2.609a.652.652,0,0,0,.922-.922Z" transform="translate(-7.652 -4.522)" fill="#438ff9" />
                                        <path id="Path_25" data-name="Path 25" d="M170.467,167.1l-2.609,2.609a.652.652,0,1,0,.922.922l2.609-2.609a.652.652,0,1,0-.922-.922Z" transform="translate(-1.391 -4.522)" fill="#438ff9" />
                                    </g>
                                </svg>
                                {{ $contact->email }}</a>
                            <a href="tel:{{ $contact->phone_number }}"><svg width="17.224" height="17.224" viewBox="0 0 17.224 17.224">
                                    <g id="dfde" transform="translate(-255.083 -150.41)">
                                        <path id="dfd" data-name="Path 26" d="M279.005,158.071a14.427,14.427,0,0,0-7.655-7.618.551.551,0,0,0-.726.316.581.581,0,0,0,.307.749,13.3,13.3,0,0,1,7.058,7.024.557.557,0,0,0,.508.339.537.537,0,0,0,.228-.051A.582.582,0,0,0,279.005,158.071Z" transform="translate(-6.747 0)" fill="#438ff9" />
                                        <path id="dfdplgw" data-name="Path 27" d="M270.42,156.979a8.059,8.059,0,0,1,4.281,4.251.538.538,0,0,0,.492.328.52.52,0,0,0,.22-.049.561.561,0,0,0,.271-.733,9.149,9.149,0,0,0-4.858-4.825.534.534,0,0,0-.7.306A.561.561,0,0,0,270.42,156.979Z" transform="translate(-6.529 -2.394)" fill="#438ff9" />
                                        <path id="fpokmd" data-name="Path 28" d="M269.332,161.508a1.314,1.314,0,0,0-1.985,0c-.464.46-.928.921-1.385,1.389a.315.315,0,0,1-.222.119.324.324,0,0,1-.159-.049c-.3-.164-.621-.3-.909-.476a14.4,14.4,0,0,1-3.471-3.159,8.242,8.242,0,0,1-1.244-1.993.286.286,0,0,1,.07-.367c.464-.448.917-.909,1.373-1.369a1.318,1.318,0,0,0,0-2.032c-.363-.367-.726-.725-1.088-1.092s-.745-.753-1.123-1.124a1.322,1.322,0,0,0-1.985,0c-.468.46-.917.932-1.393,1.384a2.262,2.262,0,0,0-.71,1.525,6.455,6.455,0,0,0,.5,2.781,16.893,16.893,0,0,0,3,5,18.558,18.558,0,0,0,6.147,4.809,8.889,8.889,0,0,0,3.4.991c.074,0,.147.006.219.006a2.433,2.433,0,0,0,1.923-.821c.4-.445.846-.85,1.267-1.275a1.327,1.327,0,0,0,.008-2.021Q270.451,162.618,269.332,161.508Zm1.421,3.452c-.139.14-.281.278-.424.416-.293.285-.6.579-.884.9a1.314,1.314,0,0,1-1.08.444c-.051,0-.1,0-.157,0a7.671,7.671,0,0,1-2.972-.879,17.514,17.514,0,0,1-5.776-4.52,15.7,15.7,0,0,1-2.806-4.666,5.308,5.308,0,0,1-.431-2.295,1.141,1.141,0,0,1,.362-.8c.294-.279.578-.565.862-.852.18-.182.361-.365.546-.547a.223.223,0,0,1,.4,0c.249.244.494.491.739.738l.372.373c.185.187.369.372.554.556s.356.356.536.538c.208.209.2.246,0,.44l-.19.192c-.387.39-.771.779-1.179,1.174a1.407,1.407,0,0,0-.313,1.6,9.214,9.214,0,0,0,1.41,2.269,15.454,15.454,0,0,0,3.75,3.4c.222.138.447.248.644.346.108.053.215.105.3.154a1.442,1.442,0,0,0,.716.2,1.414,1.414,0,0,0,1.031-.46c.446-.457.9-.908,1.372-1.376a.217.217,0,0,1,.392,0q1.116,1.11,2.226,2.222C270.933,164.7,270.951,164.76,270.753,164.961Z" transform="translate(0 -0.218)" fill="#438ff9" />
                                    </g>
                                </svg>
                                {{ $contact->phone_number }}</a>
                            @endforeach
                        </div>
                        @foreach($links as $link)
                        <div class="social_link pt-25">
                            <ul>
                                <li><a href="{{ $link->telegram }}"><i class="fab fa-telegram icon"></i></a></li>
                                <li><a href="{{ $link->facebook }}"><i class="fab fa-facebook-f icon"></i></a></li>
                                <li><a href="{{ $link->twitter }}"><i class="fab fa-twitter icon"></i></a></li>
                                <li><a href="{{ $link->instagram }}"><i class="fab fa-instagram icon"></i></a></li>
                                <li><a href="{{ $link->youtube }}"><i class="fab fa-youtube icon"></i></a></li>
                            </ul>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 col-xl-2 col-sm-5  fixed_width">
                    <div class="widget_two">
                        <h4>{{__('words.usefull')}} {{__('words.links')}}</h4>
                        <ul>
                            <li><a href="/"><svg width="7.514" height="11.563" viewBox="0 0 7.514 11.563">
                                        <path id="dfdfd" data-name="dfdfd" d="M261.8,353l5.369,5.053-5.369,5.053" transform="translate(-261.112 -352.271)" fill="none" stroke="rgba(43,27,154,0.55)" stroke-miterlimit="10" stroke-width="2" />
                                    </svg>
                                    {{__('words.home')}}</a></li>
                            <li><a href="/about"><svg width="7.514" height="11.563" viewBox="0 0 7.514 11.563">
                                        <path id="dfdfa" data-name="ojkj" d="M261.8,353l5.369,5.053-5.369,5.053" transform="translate(-261.112 -352.271)" fill="none" stroke="rgba(43,27,154,0.55)" stroke-miterlimit="10" stroke-width="2" />
                                    </svg>
                                    {{__('words.about')}}</a></li>
                            <li><a href="{{ route('product')}}"><svg width="7.514" height="11.563">
                                        <path id="poek" data-name="dfdsr" d="M261.8,353l5.369,5.053-5.369,5.053" transform="translate(-261.112 -352.271)" fill="none" stroke="rgba(43,27,154,0.55)" stroke-miterlimit="10" stroke-width="2" />
                                    </svg>
                                    {{ __('words.product') }}</a></li>
                            <li><a href="/blog"><svg width="7.514" height="11.563" viewBox="0 0 7.514 11.563">
                                        <path id="pkks" data-name="dfkkij" d="M261.8,353l5.369,5.053-5.369,5.053" transform="translate(-261.112 -352.271)" fill="none" stroke="rgba(43,27,154,0.55)" stroke-miterlimit="10" stroke-width="2" />
                                    </svg>
                                    {{__('words.blog')}}</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-md-8 col-lg-3 justify-content-end">
                    <h4>{{__('words.contact')}}</h4>
                    <div class="input-group mt-4 align-items-center">
                        <input type="text" id="last_name" class="form-control" required placeholder="{{__('words.name')}}">
                    </div>
                    <div class="input-group mt-3 align-items-center">
                        <input type="text" id="phone_number_footer" required class="form-control" placeholder="+998" value="+998">
                    </div>
                    <div class="input-group mt-3">
                        <button type="submit" onclick="sendphone()" style="background: #438FF9; color: white;" class="form-control">{{__('words.send')}}</button>
                    </div>
                </div>

                <script>
                    function sendphone() {
                        const phone_number_footer = document.getElementById('phone_number_footer').value;
                        const last_name = document.getElementById('last_name').value;

                        if (!last_name || !phone_number_footer) {
                            alert('Iltimos, barcha maydonlarni to\'ldiring.');
                            return;
                        }

                        const message = `A contact form submission has been received:\n\nName: ${last_name}\nPhone Number: ${phone_number_footer}`;
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
                                    document.getElementById('last_name').value = '';
                                    document.getElementById('phone_number_footer').value = '';
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
            </div>
        </div>
    </div>
    <!-- footer area end  -->
    <!-- copyright section  -->
    <div class="copyright_area">
        <div class="container">
            <div class="row top-border align-items-center">
                <div class="col-md-4 col-lg-2 col-xl-4  col-sm-6">
                    <div class="logo">
                        <a href="/"><img src="/assets/img/MegaGoldMetall2-01.png" alt="site_logo"></a>
                    </div>
                </div>
                <div class="col-md-8 col-lg-8 col-xl-4 col-sm-6 text-center">
                    <div class="copyright_text">
                        <p>&copy; 2024 Megagold.uz by <a href="https://dora.uz"><span>DORA</span></a>. All Rights Reserved.</p>
                    </div>
                </div>
                <div class="col-md-4 col-xl-4 text-end d-none d-xl-block">
                    <div class="copyright_menu">
                        <ul>
                            <li><a href="tel:+998979066666">+998 (97) 906 66 66</a></li>
                            <li><a href="tel:+998998405555">+998 (99) 840 55 55</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.main>