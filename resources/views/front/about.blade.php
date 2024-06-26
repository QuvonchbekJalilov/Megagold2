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
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    


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
                                    <h5>{{__('words.phone')}}</h5>
                                    <div class="text">24/7 Support<br>+998 99 840 55 55</div>
                                </div>
                            </div>
                        </div>

                        <div class="contact-info-box">
                            <div class="inner-box2">
                                <div class="icon-box">
                                    <i class="icon fa fa-map-marker-alt"></i>
                                </div>
                                <div class="content-box">
                                    <h5>{{__('words.wisitAnyTime')}}</h5>
                                    <div class="text">Ташкент, ул. Катта халка йули, 5</div>
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