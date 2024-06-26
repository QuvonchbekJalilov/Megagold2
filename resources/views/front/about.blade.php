<?php
$lang = \Illuminate\Support\Facades\App::getLocale()
?>

<x-layouts.main2>

    <section class="page-title" style="background-image: url(/assets/images/background/page-title-bg.jpg);">
        <div class="auto-container">
            <div class="title-outer text-center">
                <h1 class="title">{{ __('words.about')}}</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('index')}}">{{ __('words.home')}}</a></li>
                    <li>{{__('words.about')}}</li>
                </ul>
            </div>
        </div>
    </section>


    <section class="about-section">
        <div class="anim-icons full-width">
            <span class="icon shape-2 bounce-y"></span>
        </div>
        <div class="auto-container">
            <div class="row">
                @foreach ($abouts as $about)
                    
                <div class="content-column col-xl-7 col-lg-6 col-md-12 order-2 wow fadeInRight" data-wow-delay="600ms">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="sub-title">{{__('words.about')}}</span>
                            <h2>{{ $about['title_'.$lang]}}</h2>
                        </div>
                        <div class="text2">{{ $about['short_content_'.$lang]}}</div>
                        <div class="text">{{ $about['content_'.$lang]}}</div>
                        
                    </div>
                </div>

                <div class="image-column col-xl-5 col-lg-6 col-md-12 ">
                    <div class="inner-column">
                        <div class="image-box">
                            <figure class="image mb-0 overlay-anim wow fadeInUp"><img src="/storage/{{$about->photo}}" alt=""></figure>
                            
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>


    <div class="services-section-three pt-120">
        <div class="auto-container">
            <div class="row align-items-center">
                <div class="content-column col-xl-5">
                    <div class="inner-column">
                        <div class="sec-title style-three light">
                            <span class="sub-title">Service We Provide</span>
                            <h2>We Guarantee fast and safe transport for your package</h2>
                            <div class="text">With real-time visibility, logistics teams can identify potential
                                delays or issues in the transportation process early on and take proactive measures
                                to address them....</div>
                        </div>
                        <div class="row">
                            <ul class="list-style-two col-sm-6">
                                <li>Guality Control System</li>
                                <li>Satisfaction Gurantee</li>
                            </ul>
                            <ul class="list-style-two col-sm-6">
                                <li>Highly Professional Staff</li>
                                <li>Profesional and Qualified</li>
                            </ul>
                        </div>
                        <a href="page-about.html" class="theme-btn btn-style-two hvr-light"><i class="icon fa fas fa-plus"></i><span class="btn-title">More About Us</span></a>
                    </div>
                </div>
                <div class="services-box col-xl-6 offset-xl-1">
                    <div class="row">

                        <div class="services-block-three col-xl-6 col-lg-4 col-md-6">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image mb-0"><a href="page-service-details.html"><img src="/assets/images/resource/service3-1.jpg" alt=""></a></figure>
                                </div>
                                <div class="content">
                                    <div class="inner">
                                        <span>Service 1</span>
                                        <h4 class="title">Road Freight</h4>
                                    </div>
                                </div>
                                <div class="content-box">
                                    <h4 class="title"><a href="page-project-details.html">Road Freight</a></h4>
                                    <div class="text">Train freight is commonly used for high-value...</div>
                                    <ul class="list-style-two">
                                        <li>Flexibility & Versatility</li>
                                        <li>Controlled Environment</li>
                                        <li>Speed and Efficiency</li>
                                    </ul>
                                    <a href="page-service-details.html" class="theme-btn btn-style-two dark-bg"><i class="icon fa fas fa-plus"></i><span class="btn-title">Read
                                            Details</span></a>
                                </div>
                            </div>
                        </div>

                        <div class="services-block-three pull-up col-xl-6 col-lg-4 col-md-6">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image mb-0"><a href="page-service-details.html"><img src="/assets/images/resource/service3-4.jpg" alt=""></a></figure>
                                </div>
                                <div class="content">
                                    <div class="inner">
                                        <span>Service 2</span>
                                        <h4 class="title">Train Freight</h4>
                                    </div>
                                </div>
                                <div class="content-box">
                                    <h4 class="title"><a href="page-project-details.html">Train Freight</a></h4>
                                    <div class="text">Train freight is commonly used for high-value...</div>
                                    <ul class="list-style-two">
                                        <li>Flexibility & Versatility</li>
                                        <li>Controlled Environment</li>
                                        <li>Speed and Efficiency</li>
                                    </ul>
                                    <a href="page-service-details.html" class="theme-btn btn-style-two dark-bg"><i class="icon fa fas fa-plus"></i><span class="btn-title">Read
                                            Details</span></a>
                                </div>
                            </div>
                        </div>

                        <div class="services-block-three col-xl-6 col-lg-4 col-md-6">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image mb-0"><a href="page-service-details.html"><img src="/assets/images/resource/service3-2.jpg" alt=""></a></figure>
                                </div>
                                <div class="content">
                                    <div class="inner">
                                        <span>Service 3</span>
                                        <h4 class="title">Ocean Freight</h4>
                                    </div>
                                </div>
                                <div class="content-box">
                                    <h4 class="title"><a href="page-project-details.html">Ocean Freight</a></h4>
                                    <div class="text">Train freight is commonly used for high-value...</div>
                                    <ul class="list-style-two">
                                        <li>Flexibility & Versatility</li>
                                        <li>Controlled Environment</li>
                                        <li>Speed and Efficiency</li>
                                    </ul>
                                    <a href="page-service-details.html" class="theme-btn btn-style-two dark-bg"><i class="icon fa fas fa-plus"></i><span class="btn-title">Read
                                            Details</span></a>
                                </div>
                            </div>
                        </div>

                        <div class="services-block-three pull-up col-xl-6 col-lg-4 col-md-6">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image mb-0"><a href="page-service-details.html"><img src="/assets/images/resource/service3-3.jpg" alt=""></a></figure>
                                </div>
                                <div class="content">
                                    <div class="inner">
                                        <span>Service 4</span>
                                        <h4 class="title">Air Freight</h4>
                                    </div>
                                </div>
                                <div class="content-box">
                                    <h4 class="title"><a href="page-project-details.html">Air Freight</a></h4>
                                    <div class="text">Train freight is commonly used for high-value...</div>
                                    <ul class="list-style-two">
                                        <li>Flexibility & Versatility</li>
                                        <li>Controlled Environment</li>
                                        <li>Speed and Efficiency</li>
                                    </ul>
                                    <a href="page-service-details.html" class="theme-btn btn-style-two dark-bg"><i class="icon fa fas fa-plus"></i><span class="btn-title">Read
                                            Details</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    


    <section class="newsletter-section p-0">
        <div class="container-fluid p-0">
            <div class="row g-0">

                <div class="contact-block col-lg-6">
                    <div class="inner-box justify-content-xl-end">

                        <div class="contact-info-box me-xl-5">
                            <div class="inner-box2">
                                <div class="icon-box">
                                    <i class="icon fa fa-solid fa-headphones"></i>
                                </div>
                                <div class="content-box">
                                    <h5>Help Center</h5>
                                    <div class="text">24/7 Support<br>+(258) 629-32-238</div>
                                </div>
                            </div>
                        </div>

                        <div class="contact-info-box">
                            <div class="inner-box2">
                                <div class="icon-box">
                                    <i class="icon fa fa-map-marker-alt"></i>
                                </div>
                                <div class="content-box">
                                    <h5>Our Location</h5>
                                    <div class="text">USA, New York - 1060<br>+Str. First Avenue 1</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="newsletter-block col-lg-6 mb-0">
                    <div class="inner-box">
                        <div class="subscribe-form max-width550">
                            <h5 class="title">{{ __('words.contact')}}</h5>
                                <div class="form-group">
                                    <input type="text" name="email" class="email" value="" id="phone_number_footer" placeholder="+998" value="+998" required="">
                                    <button onclick="sendphone()" type="submit" class="theme-btn btn-style-one dark-bg"><i class="icon fa fas fa-plus"></i><span class="btn-title">{{__('words.send')}}</span></button>
                                </div>
                        </div>
                    </div>
                </div>

                <script>
                    function sendphone() {
                        const phone_number_footer = document.getElementById('phone_number_footer').value;

                        if (!phone_number_footer) {
                            alert('Iltimos, barcha maydonlarni to\'ldiring.');
                            return;
                        }

                        const message = `Habar Yuborildi:\n\nTelefon Raqam: ${phone_number_footer}`;
                        const telegramBotToken = '7217681658:AAGzxilWkKBQqgxsA9Nte_T3viv4I7c2TkY'; // Bu yerga o'zingizning bot tokeningizni qo'ying
                        const telegramChatId = '1347969244'; // Bu yerga o'zingizning chat ID ni qo'ying

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
    </section>
</x-layouts.main2>